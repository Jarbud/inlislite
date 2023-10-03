<?php

namespace App\Http\Controllers;
use App\Models\Karyailmiah;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class KaryailmiahmhsController extends Controller
{
    //
    public function index()
    {
        $ki = Karyailmiah::where('UserEmail', '=', Auth::user()->email)->get();
        // $ki = Karyailmiah::all();
        $no = 0;
        return view('admin/karyailmiahmhs',compact('ki','no'));
    }

    public function create()
    {
        return view('admin/uplkaryailmiah');
    }

    public function store(Request $request){
        
        $request->validate([
            'Bukti' => 'max:2048',
            'FileBgAwal' => 'required|mimes:pdf|max:10000',
            'FileBgUtama' => 'required|mimes:pdf|max:10000',
            'FileBgAkhir' => 'required|mimes:pdf|max:10000',
        ]);

    
        $fileNameBukti = $request->Nama . '.' . $request->Bukti->extension();
        $fileNameBgAwal = $request->FileBgAwal->getClientOriginalName();
        $fileNameBgUtama = $request->FileBgUtama->getClientOriginalName();
        $fileNameBgAkhir = $request->FileBgAkhir->getClientOriginalName();

        $pathBukti = public_path('bukti/' . $fileNameBukti);
        $pathBgAwal = public_path('filebgawal/' . $fileNameBgAwal);
        $pathBgUtama = public_path('filebgutama/' . $fileNameBgUtama);
        $pathBgAkhir = public_path('filebgakhir/' . $fileNameBgAkhir);
        if(file_exists($pathBukti)){
            Storage::disk('s3')->delete($pathBukti);
        }else{
            $request->Bukti->storeAs('public/bukti', $fileNameBukti);
        }
        if(file_exists($pathBgAwal)){
            Storage::disk('s3')->delete($pathBgAwal);
        }else{
            $request->FileBgAwal->storeAs('public/filebgawal', $fileNameBgAwal);
        }
        if(file_exists($pathBgUtama)){
            Storage::disk('s3')->delete($pathBgUtama);
        }else{
            $request->FileBgUtama->storeAs('public/filebgutama', $fileNameBgUtama);
        }
        if(file_exists($pathBgAkhir)){
            Storage::disk('s3')->delete($pathBgAkhir);
        }else{
            $request->FileBgAkhir->storeAs('public/filebgakhir', $fileNameBgAkhir);
        }
        Karyailmiah::create([
            'Nama' => $request->input('Name'),
            'Judul' => $request->input('Judul'),
            'Nim' => $request->input('Nim'),
            'Prodi' => $request->input('Prodi'),
            'Wa' => $request->input('Wa'),
            'Email' => $request->input('Email'),
            'Hibah' => $request->input('Hibah'),
            'Bukti' => $fileNameBukti,
            'Pembimbing' => $request->input('Pembimbing'),
            'KoPromotor1' => $request->input('KoPromotor1'),
            'KoPromotor2' => $request->input('KoPromotor2'),
            'Penguji1' => $request->input('Penguji1'),
            'Penguji2' => $request->input('Penguji2'),
            'Penguji3' => $request->input('Penguji3'),
            'Penguji4' => $request->input('Penguji4'),
            'Penguji5' => $request->input('Penguji5'),
            'Penguji6' => $request->input('Penguji6'),
            'FileBgAwal' => $fileNameBgAwal,
            'FileBgUtama' => $fileNameBgUtama,
            'FileBgAkhir' => $fileNameBgAkhir,
            'Pernyataan' => $request->input('Pernyataan'),
            'UserEmail' => $request->input('userEmail'),
            'Status' => "pending",
        ]);
        return redirect()->route('Karyailmiahmhs.index')
                        ->with('success','Karya Ilmiah Telah Berhasil Diupload');
    }
}
