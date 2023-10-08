<?php

namespace App\Http\Controllers;

use App\Models\SurveyResponse;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function show() {
        return view('survey');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
        ]);

        SurveyResponse::create($validated);

        return redirect('/survey-show')->with('success', 'Terimakasih atas partisipasi Anda!');
    }
}
