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
use Illuminate\Support\Facades\Auth;
use App\Models\MemberGuesses as ModelsMemberGuesses;
use App\Models\Members;


class PendaftaranController extends Controller
{
    public function show()
    {
        $pend = master_pendidikan::all();
        $jks = jenis_kelamin::all();
        $kerjas = master_pekerjaan::all();
        $stat = master_status_perkawinan::all();
        $pil = agama::all();
        $identitas = master_jenis_identitas::all();
        // dd($identitas_teks->Nama);
        return view('daftar', compact('pend', 'jks', 'kerjas', 'stat', 'pil', 'identitas'));
    }

    public function store(Request $request)
    {
        Members::create([
            'IdentityType_id' => $request->input('identitas'),
            'IdentityNo' => $request->input('nomor'),
            'email' => $request->input('email'),
            'Fullname' => $request->input('name'),
            'PlaceOfBirth' => $request->input('tempat'),
            'DateOfBirth' => $request->input('tanggal'),
            'Sex_id' => $request->Jenis,
            'Address' => $request->input('AlamatRumah'),
            'AddressNow' => $request->input('AlamatSaatini'),
            'EducationLevel_id' => $request->Pendidikan,
            'Job_id' => $request->Kerja,
            'Agama_id' => $request->agama,
            'MaritalStatus_id' => $request->Status,
            'NoHp' => $request->input('NoHP'),
            'Phone' => $request->input('NoRumah'),
            'InstitutionName' => $request->input('Institusi'),
            'InstitutionAddress' => $request->input('AlamatIns'),
            'InstitutionPhone' => $request->input('inputNoIns'),
            'HasVerified' => "false",
        ]);

        return redirect('/berhasil-mendaftar');
    }
}
