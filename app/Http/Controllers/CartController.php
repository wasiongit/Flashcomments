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
            
        ]);
    }
    public function list() {
        return view('checkoutlist', [
            'orders' => Auth::user()
        ]);
    }
    public function search(Request $request) {
        dd($request->all());
        $sum = array_sum($request->all());
        dd($sum);
}
}