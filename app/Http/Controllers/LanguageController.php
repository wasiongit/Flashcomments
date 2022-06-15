<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Models\Languages;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index($topic) {
        $topicContent = Topics::where('id', '=', $topic)->first();
        return view('languages.index', [
            'topic' => $topicContent,
            'languages' => Languages::latest()->get()
        ]);
    }
    public function create() {
        return view('forms.languages-form');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'flag_code' => 'required|max:2'
        ]);

        Languages::create($formFields);

        return redirect('/dashboard')->with('message', 'New Language added');
    }

    public function destroy(Languages $language) {
        $language->delete();
        return redirect('/dashboard')->with('message', 'Language deleted successfully');
        
    }
}
