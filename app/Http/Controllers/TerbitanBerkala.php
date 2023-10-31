<?php

namespace App\Http\Controllers;

use App\Models\catalogs;
use Illuminate\Http\Request;

class TerbitanBerkala extends Controller
{
    public function show()
    {
        $catalogs = catalogs::all();
        return view('admin/akuisisi/0terbitanberkala', compact('catalogs'));
    }
}
