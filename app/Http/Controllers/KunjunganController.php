<?php

namespace App\Http\Controllers;

use App\Models\BacaDiTempat;
use App\Models\Members;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function get(Request $request)
    {
        $nim = $request->query('NoPengunjung');
        $mahasiswa = Members::where('IdentityNo', $nim)->first();

        return response()->json($mahasiswa);
    }

    public function store(Request $request)
    {
        $nim = $request->input('NoPengunjung');
        $ipAddress = $request->ip();

        $bukutamu = new BacaDiTempat();
        $bukutamu->TanggalKunjungan = now();
        $bukutamu->NoPengunjung = $nim;
        $bukutamu->IP = $ipAddress;
        $bukutamu->save();

        return redirect();
    }
}
