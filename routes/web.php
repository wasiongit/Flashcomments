<?php

use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CategoryController::class, 'all']);

// Show Login form
Route::get('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/signup', function () {
    return view('auth.register');
});

Route::get('/admin/register', [UserController::class, 'create']);

// Create new user
Route::post('/admin/register', [UserController::class, 'store']);

Route::get('/holidays', function () {
    return view('categories.holidays');
});

Route::get('/dashboard', [CategoryController::class, 'index']);

Route::post('/admin/login', [UserController::class, 'authenticate']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories/create', [FormController::class, 'create']);

Route::post('/categories/create', [FormController::class, 'store']);

Route::get('/categories/{category}', [CategoryController::class, 'show']);

// Delete a Category
Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

Route::get('/categories/{category}/edit', 
[CategoryController::class, 'edit']);

// Update Category
Route::put('/categories/{category}', [CategoryController::class, 'update']);

Route::get('/categories/{category}/topics', [TopicController::class, 'index']);


Route::get('/topics/create', [TopicController::class, 'create']);

Route::post('/topics/create', [TopicController::class, 'store']);

// Edit Topic
Route::get('/topic/{topic}/edit', [TopicController::class, 'edit']);

// Update Topic
Route::put('/topics/{topic}', [TopicController::class, 'update']);

// Delete a Category
Route::delete('/topics/{topic}', [TopicController::class, 'destroy']);

Route::get('/topics/{topic}/languages', [LanguageController::class, 'index']);

// Show Language form
Route::get('/languages/create', [LanguageController::class, 'create']);
Route::post('/languages/create', [LanguageController::class, 'store']);

Route::delete('/languages/{language}', [LanguageController::class, 'destroy']);

// To show 'add comments' form
Route::get('/comments/create', [CommentsController::class, 'create']);
Route::post('/comments/create', [CommentsController::class, 'store']);

Route::get('/checkout', [CartController::class, 'index']);

Route::get('/checkout/list', [CartController::class, 'list']);

Route::post('/comments/search', [CartController::class, 'search']);