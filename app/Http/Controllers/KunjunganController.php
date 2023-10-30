<?php

namespace App\Http\Controllers;

use App\Models\BacaDiTempat;
use App\Models\jenis_kelamin;
use App\Models\JenisAnggota;
use App\Models\LocationLibrary;
use App\Models\Locations;
use App\Models\master_pekerjaan;
use App\Models\master_pendidikan;
use App\Models\MemberGuesses;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Picqer\Barcode\BarcodeGeneratorHTML;

class KunjunganController extends Controller
{
    public function show()
    {
        return view('kunjungan');
    }
    public function show1(Request $request)
    {
        $ip = $request->ip();
        $lokPerpus = LocationLibrary::all();
        $libraryPerpus = Locations::all();

        return view("bukutamu", compact('ip', 'lokPerpus', 'libraryPerpus'));
    }
    public function check(Request $request)
    {
        $noPengenal = $request->query('no_pengenal');
        $user = User::where('no_pengenal', $noPengenal)->with('jenis_anggota')->first();
        if ($user && $user->verifikasi === "true") {

            return view('kunjungan', compact('user'));
        } else {

            return view('kunjungan')->with('message', 'Pengguna tidak ditemukan atau tidak terverifikasi');
        }
    }
    public function store(Request $request)
    {
        $bacatmp = new BacaDiTempat();
        $bacatmp->no_pengenal = $request->input('no_pengenal');
        $bacatmp->name = $request->input('name');
        $bacatmp->ip = $request->ip();
        $bacatmp->tanggal_kunjungan = Carbon::now()->format('Y-m-d H:i:s');
        $bacatmp->LokasiPerpustakaan = $request->session()->get('dataperpus');
        $bacatmp->LokasiBaca = $request->session()->get('datalibrary');
        $user = User::where('no_pengenal', $bacatmp->no_pengenal)->first();
        if ($user) {
            $jenisAnggotaId = $user->jenis_anggota_id;
            $jenisAnggota = JenisAnggota::where('id', $jenisAnggotaId)->first();
            if ($jenisAnggota) {
                $bacatmp->jenis_anggota = $jenisAnggota->jenisanggota;
            }
        }
        $bacatmp->save();

        //hapus session
        //$request->session()->flush();

        return redirect('input')->with('success', 'Data berhasil disimpan');
    }
    public function store1(Request $request)
    {
        $perpus = $request->input('perpus');
        $library = $request->input('library');

        $request->session()->put('dataperpus', $perpus);
        $request->session()->put('datalibrary', $library);

        return redirect('input');
    }
}
