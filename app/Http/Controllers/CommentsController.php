<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function create() {
        return view('comments.create');
    }

    public function store(Request $request) {
        $topic = DB::table('topics')
            ->where('title', $request->topic_title)
            ->first();
        $language = DB::table('languages')
            ->where('title', $request->language_title)
            ->first();
        $formFields = $request->validate([
            'content' => 'required'
        ]);

        $formFields['topic_id'] = $topic->id;
        $formFields['language_id'] = $language->id;
        Comments::create($formFields);

        return redirect('/dashboard')->with('message', 'Comment created successfully!');
    }
}

// foreach ($request->except('_token') as $key => $part) {
//     // Part value validation will eventually go here
//     $formFields['user_id'] = auth()->id();
//     $formFields['topic_id'] = $topic;
//     $formFields['language_id'] = $key;
//     $formFields['comments_num'] = $part;
//     Comments::create($formFields);
//   }