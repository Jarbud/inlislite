<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class DaftarKatalog extends Controller
{
    public function index()
    {
        $data = Catalog::all();
        return view('admin.katalog.daftar_katalog', ['data' => $data]);
    }
}
