<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public $user_request;
    
    public function list() {
        dd($this->user_request);
    }
    public function search(Request $request) {
        $this->user_request = $request->all();
        $sum = array_sum($request->all());
        return view('checkout', [
            'comments_num' => $sum
        ]);
}
}