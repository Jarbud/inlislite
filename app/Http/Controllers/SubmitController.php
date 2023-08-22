<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

class SubmitController extends Controller
{
    public function generate() {
        $randomCode = Str::random(10);
        return view('submit', ['randomCode' => $randomCode]);
    }
}
