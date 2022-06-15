<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Comments;
use App\Models\Languages;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create($id) {
        return view('order.create', [
            'comments' => Comments::where('id', '=', $id)->get(),
        ]);
    }
    public function store(Request $request, $id) {
        $formFields = $request->validate([
            'comment' => 'required'
        ]);
        $formFields['status'] = 1;
        $formFields['comments_id'] = $id;
        $formFields['user_id'] = auth()->id();
        Order::create($formFields);

        return redirect('/dashboard')->with('message', 'Order filled successfully!');
    }
}
