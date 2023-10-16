<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DaftarKatalogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Ambil data dari koleksi Catalog beserta relasinya
            $data = Catalog::with('collection', 'catalogFile')
                ->select('NoInduk', 'BIBID', 'Title', 'Edition', 'Publikasi', 'PhysicalDescription', 'Subject', 'CallNumber', 'FilleURL')
                ->get();

            return DataTables::of($data)->make();
        }

        return view('admin.katalog.daftar_katalog');
    }
}
