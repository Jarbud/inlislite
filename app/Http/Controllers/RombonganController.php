<?php

namespace App\Http\Controllers;

use App\Models\groupguesses;
use Illuminate\Http\Request;

class RombonganController extends Controller
{
    public function show()
    {
        $groupguesses = groupguesses::all();
        return view('/bukutamu', compact('groupguesses'));
    }

    public function store(Request $request)
    {
        $rombongan = new groupguesses();
        $rombongan->NamaKetua = $request->input('NamaKetua');
        $rombongan->NomorTelponKetua = $request->input('NomorTelponKetua');
        $rombongan->AsalInstansi = $request->input('AsalInstansi');
        $rombongan->AlamatInstansi = $request->input('AlamatInstansi');
        $rombongan->TeleponInstansi = $request->input('TeleponInstansi');
        $rombongan->EmailInstansi = $request->input('EmailInstansi');

        $rombongan->CountLaki = $request->input('CountLaki');
        $rombongan->CountPerempuan = $request->input('CountPerempuan');

        $rombongan->CountPelajar = $request->input('CountPelajar');
        $rombongan->CountGuru = $request->input('CountGuru');
        $rombongan->CountMahasiswa = $request->input('CountMahasiswa');
        $rombongan->CountDosen = $request->input('CountDosen');
        $rombongan->CountPSwasta = $request->input('CountPSwasta');
        $rombongan->CountWiraswasta = $request->input('CountWiraswasta');
        $rombongan->CountPensiunan = $request->input('CountPensiunan');
        $rombongan->CountPNS = $request->input('CountPNS');
        $rombongan->CountTNI = $request->input('CountTNI');
        $rombongan->CountPeneliti = $request->input('CountPeneliti');
        $rombongan->CountLainnya = $request->input('CountLainnya');

        $rombongan->CountSD = $request->input('CountSD');
        $rombongan->CountSMP = $request->input('CountSMP');
        $rombongan->CountSMA = $request->input('CountSMA');
        $rombongan->CountD1 = $request->input('CountD1');
        $rombongan->CountD2 = $request->input('CountD2');
        $rombongan->CountD3 = $request->input('CountD3');
        $rombongan->CountS1 = $request->input('CountS1');
        $rombongan->CountS2 = $request->input('CountS2');
        $rombongan->CountS3 = $request->input('CountS3');
        $rombongan->save();

        return redirect('bukutamu');
    }
}
