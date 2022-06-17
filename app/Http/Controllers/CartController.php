<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Topics;
use App\Models\Comments;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function search(Request $request, $topic_id) {
        $sum = array_sum($request->all());
        
        foreach ($request->except('_token') as $key => $value) {
            $languages = Languages::where('title', $key)->first();
            $comment_contents[] = DB::table('comments')
                ->where('topic_id', $topic_id)
                ->where('language_id', $languages->id)
                ->limit($value)
                ->get();
        }
        foreach ($comment_contents as $row) {
            $contents[]=$row->toArray();
        }
        foreach ($contents as $value) {
            $content[] = array_column($value, 'content');
        }
        $finalArray = call_user_func_array('array_merge', $content);
        return view('checkout', [
            'comments_num' => $sum,
            'comment_contents' => $finalArray
        ]);
    }
}