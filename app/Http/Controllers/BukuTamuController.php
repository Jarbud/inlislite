<?php

namespace App\Http\Controllers;

use App\Models\BacaDiTempat;
use App\Models\BacaDiTempatLocation;
use App\Models\LocationLibrary;
use App\Models\Locations;
use App\Models\Members;
use App\Models\Verify;
use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    public function show(Request $request)
    {
        $ip = $request->ip();
        $lokPerpus = Locations::all();
        $libraryPerpus = LocationLibrary::all();

        return view("kunjungan", compact('ip', 'lokPerpus', 'libraryPerpus'));
    }

    public function store(Request $request)
    {
        $ipAddres = $request->ip();
        $perpus = $request->input('perpus');
        $library = $request->input('library');

        $bacalocation = new BacaDiTempatLocation();
        $bacalocation->IP = $ipAddres;
        $bacalocation->LokasiPerpustakaan = $perpus;
        $bacalocation->LokasiBaca = $library;
        $bacalocation->save();
    }
}
