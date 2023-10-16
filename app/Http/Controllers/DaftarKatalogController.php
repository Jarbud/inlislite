<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class DaftarKatalogController extends Controller
{
    public function index()
    {
        $data = Catalog::all();
        $no = 1;
        // return view('admin.katalog.daftar_katalog', ['data' => $data]);
        return view('admin/katalog/daftar_katalog', compact('data', 'no'));
    }
}
