<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Languages;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $topic) {
        foreach ($request->except('_token') as $key => $part) {
            // Part value validation will eventually go here
            $formFields['user_id'] = auth()->id();
            $formFields['topic_id'] = $topic;
            $formFields['language_id'] = $key;
            $formFields['comments_num'] = $part;
            Comments::create($formFields);
          }

        return redirect('/checkout')->with('message', 'Order placed successfully!');
    }
}
