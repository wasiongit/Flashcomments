<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create() {
        return view('forms.categories-form');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Categories::create($formFields);

        return redirect('/dashboard')->with('message', 'Category created successfully!');
    }
}
