<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use App\Models\catalogs;
use App\Models\collections;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($id) {
        $katalog = catalogs::find($id);
        return view('viewdetail', compact('katalog'));
    }
}
