<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use App\Models\catalogs;
use Illuminate\Http\Request;

class ViewOpac extends Controller
{
    public function show()
    {
        $jenis_bahan = worksheets::all();
        $katalog = catalogs::paginate(15);
        return view('viewopac', compact('jenis_bahan', 'katalog'));
    }
}
