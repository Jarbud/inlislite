<?php

namespace App\Http\Controllers;

use App\Models\tujuan_kunjungan;
use App\Models\BukuTamu;
use Illuminate\Http\Request;

class bukutamuController extends Controller
{
    public function show()
    {
        $tujuan_kunjungan = tujuan_kunjungan::all();
        return view('bukutamu', compact('tujuan_kunjungan'));
    }

    public function store(Request $request)
    {
        $data = $request->all();


        BukuTamu::create($data);


        return redirect('bukutamu');
    }
}
