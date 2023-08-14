<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\jenis_kelamin;
use App\Models\master_pekerjaan;
use App\Models\master_pendidikan;
use App\Models\master_status_perkawinan;
use App\Models\memberguesses;

class PendaftaranController extends Controller
{
    public function show() {
        $pend = master_pendidikan::all();
        $jks = jenis_kelamin::all();
        $kerjas = master_pekerjaan::all();
        $stat = master_status_perkawinan::all();

        return view('daftar',compact('pend','jks', 'kerjas', 'stat'));
    }

    public function create() {
        return view('daftar');
    }

    public function store(Request $request) {
        memberguesses::create([
            'Nama'=> $request->input('Nama')
        ]);
        return redirect()->back();
    }
}
