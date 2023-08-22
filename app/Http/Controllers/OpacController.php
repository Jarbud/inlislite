<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpacController extends Controller
{
    public function show() {
        $bahan = worksheets::all();
        
        return view('opac',compact('bahan'));
    }
}
