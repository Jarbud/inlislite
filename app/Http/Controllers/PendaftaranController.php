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
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Verify;
use Illuminate\Support\Facades\Storage;


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
        // $identitas_teks = master_jenis_identitas::where('id', '=', Auth::user()->identitas_id)->first();
        // dd($identitas_teks->Nama);
        return view('daftar',compact('pend','jks', 'kerjas', 'stat', 'pil', 'identitas'));
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',

        ]);

        $fileNameKTP = $name . 'KTP' . '.' . $request->image->extension();
        $fileNameSelfie = $name . 'Selfie' . '.' . $request->image2->extension();

        $path1 = public_path('ktp/' . $fileNameKTP);
        $path2 = public_path('selfie/' . $fileNameKTP);

        if(file_exists($path1)){
            Storage::disk('s3')->delete($path1);
        }else{
            $request->image->storeAs('public/ktp', $fileNameKTP);
        }
        if(file_exists($path2)){
            Storage::disk('s3')->delete($path2);
        }else{
            $request->image2->storeAs('public/selfie', $fileNameSelfie);
        }
        Verify::create([
            'user_email' => $request->input('email'),
            'photoKtp' => $fileNameKTP,
            'photoSelfie' => $fileNameSelfie,
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'jenis_anggota_id' => $request->input('jenis_anggota_id'),
            'identitas_id' => $request->input('identitas'),
            'no_pengenal' => $request->input('nomor'),
            'telp' => $request->input('NoHP'),
            'verifikasi' => "false",
            'alamat' => $request->input('AlamatSaatini'),
            // 'kode_verifikasi' => $kode,
        ]);
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
