<?php

namespace App\Http\Controllers;

use App\Models\collections;
use App\Models\catalogs;
use Illuminate\Http\Request;

class DaftarKoleksi extends Controller
{
    public function show()
    {
        $daftarkoleksi = collections::all();
        $daftarkatalog = catalogs::all();

        /*$katalog = $daftarkatalog->toArray();
        $koleksi = $daftarkoleksi->toArray();

        $daftarkatalog->toArray();
        $daftarkoleksi->toArray();
        
        $daftar = array_merge($katalog, $koleksi);*/

        return view('admin/akuisisi/0daftarkoleksi', compact( 'daftarkoleksi', 'daftarkatalog'));
    }
}
