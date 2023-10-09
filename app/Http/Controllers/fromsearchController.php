<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use Illuminate\Http\Request;

class fromsearchController extends Controller
{
    public function show()
    {
        $jenis_bahan = worksheets::all();
        return view('fromsearch', compact('jenis_bahan'));
    }
}
