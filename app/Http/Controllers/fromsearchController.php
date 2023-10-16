<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use App\Models\catalogs;
use Illuminate\Http\Request;

class fromsearchController extends Controller
{
    public function show()
    {
        $jenis_bahan = worksheets::all();
        $katalog = catalogs::all();
        return view('fromsearch', compact('jenis_bahan', 'katalog'));
    }
}
