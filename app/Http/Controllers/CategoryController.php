<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Models\Comments;
use App\Models\Languages;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    public function index() {
        if (! Gate::allows('show-dashboard')) {
            abort(403);
        }
        return view('dashboard', [
            'categories' => Categories::latest()->get(),
            'topics' => Topics::latest()->get(),
            'languages' => Languages::latest()->get(),
            'comments' => Comments::latest()->get(),
        ]);
        }

    public function all() {
        return view('index', [
            'categories' => Categories::latest()->get()
        ]);
    }
    public function show(Categories $category) {
        return view('categories.show', [
            'category' => $category
        ]);
    }
    
    // Update Category
     public function update(Request $request, Categories $category){
        if (! Gate::allows('update-category', $category)) {
            abort(403);
        }
        $formFields = $request->validate([
            'title' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $category->update($formFields);

        return redirect('/dashboard')->with('message', 'Category updated successfully');
    }

    public function destroy(Categories $category) {
        if (! Gate::allows('delete-category', $category)) {
            abort(403);
        }
        
        $category->delete();
        return redirect('/dashboard')->with('message', 'Category deleted successfully');
    }
    public function edit(Categories $category) {
        return view('categories.edit', [
            'category' => $category]);
    }
}
