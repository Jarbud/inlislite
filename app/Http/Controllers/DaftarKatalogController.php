<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class DaftarKatalogController extends Controller
{
    public function index()
    {
        $data = Catalog::with('catalogFile')->get();
        return view('admin\katalog\daftar_katalog', compact('data'));
    }
}
