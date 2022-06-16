<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Comments;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function search(Request $request, $topic_id) {
        $data = $request->all();
        $sum = array_sum($request->all());
        foreach ($data as $key => $value) {
            $languages = Languages::where('title', '=', $key)->get();
            $comment_content = DB::table('comments')
                ->where('topic_id', $topic_id)
                ->where('language_id', $languages->id)
                ->limit($value)
                ->get();
        }
        
        return view('checkout', [
            'comments_num' => $sum,
            'comment_content' => $comment_content
        ]);
    }
}