<?php

namespace App\Http\Controllers;

use App\Models\BacaDiTempat;
use App\Models\jenis_kelamin;
use App\Models\LocationLibrary;
use App\Models\Locations;
use App\Models\master_pekerjaan;
use App\Models\master_pendidikan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KunjunganController extends Controller
{
    public function show1(Request $request)
    {
        $ip = $request->ip();
        $lokPerpus = Locations::all();
        $libraryPerpus = LocationLibrary::all();

        return view("bukutamu", compact('ip', 'lokPerpus', 'libraryPerpus'));
    }

    public function show()
    {
        $kerjaan = master_pekerjaan::all();
        $pendidikan = master_pendidikan::all();
        $jenka = jenis_kelamin::all();

        return view('kunjungan', compact('kerjaan', 'pendidikan', 'jenka'));
    }
    public function check(Request $request)
    {
        $noPengenal = $request->query('no_pengenal');
        $user = User::where('no_pengenal', $noPengenal)->first();
        return view('kunjungan', compact('user'));
    }

    public function store1(Request $request)
    {
        $perpus = $request->input('perpus');
        $library = $request->input('library');

        $request->session()->put('dataperpus', $perpus);
        $request->session()->put('datalibrary', $library);
        return redirect('input');
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
        $bacatmp->save();

        //hapus session
        //$request->session()->flush();

        return redirect('input')->with('success', 'Data berhasil disimpan');
    }
}
