<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use Illuminate\Http\Request;

class ViewCollectionController extends Controller
{
    public function show()
    {
        $jenis_bahan = worksheets::all();
        return view('viewcollection', compact('jenis_bahan'));
    }
}
