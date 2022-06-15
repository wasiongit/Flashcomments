<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() {
        return view('checkout', [
            'comments' => Comments::where('user_id', '=', auth()->id())->get()
        ]);
    }
    public function list() {
        return view('checkoutlist', [
            'orders' => Auth::user()
        ]);
    }
}
