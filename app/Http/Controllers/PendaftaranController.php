<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\jenis_kelamin;
use App\Models\master_pekerjaan;
use App\Models\master_pendidikan;
use App\Models\master_status_perkawinan;
use App\Models\memberguesses;
use App\Models\agama;
use App\Models\master_jenis_identitas;
use App\Models\MemberGuesses as ModelsMemberGuesses;

class PendaftaranController extends Controller
{
    public function show() {
        $pend = master_pendidikan::all();
        $jks = jenis_kelamin::all();
        $kerjas = master_pekerjaan::all();
        $stat = master_status_perkawinan::all();
        $pil = agama::all();
        $identitas = master_jenis_identitas::all();

        return view('daftar',compact('pend','jks', 'kerjas', 'stat', 'pil', 'identitas'));
    }

    public function store(Request $request) {
        $data = $request->all();
        

        MemberGuesses::create($data);


        return redirect('/submit');
    }
}
