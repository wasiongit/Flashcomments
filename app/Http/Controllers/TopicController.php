<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class TopicController extends Controller
{
    public function index(Categories $category) {
        return view('topics.show', [
            'topics' => Topics::where('category_id', '=', $category->id)->get()
        ]);

    }
    public function show() {
        return view('topics.view', [
            'topics' => Topics::latest()->get(),
        ]);
    }

    // Show New Topic form
    public function create() {
        return view('forms.topics-form');
    }

    // Store a new Topic
    public function store(Request $request) {
        $category = DB::table('categories')
            ->where('title', $request->category_title)
            ->first();
        $formFields = $request->validate([
            'title' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['category_id'] = $category->id;
        Topics::create($formFields);

        return redirect('/dashboard')->with('message', 'Topic created successfully!');
    }

    // Show Edit form
    public function edit(Topics $topic) {
        return view('topics.edit', [
            'topic' => $topic]);
    }

    // Update Topic
    public function update(Request $request, Topics $topic){
        if (! Gate::allows('update-topic', $topic)) {
            abort(403);
        }
        $formFields = $request->validate([
            'title' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $topic->update($formFields);

        return redirect('/dashboard')->with('message', 'Topic updated successfully');
    }

    // Delete Topic
    public function destroy(Topics $topic) {
        if (! Gate::allows('delete-topic', $topic)) {
            abort(403);
        }
        $topic->delete();
        return redirect('/dashboard')->with('message', 'Topic deleted successfully');
    }
}
