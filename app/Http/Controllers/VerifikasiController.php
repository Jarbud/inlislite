<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Verify;


class VerifikasiController extends Controller
{
    //
    public function index()
    {
        return view('admin/verifikasi');
    }

    public function storePhoto(Request $request, string $id){
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',

        ]);

        $user = User::find($id);

        $fileNameKTP = $user->name . 'KTP' . '.' . $request->image->extension();
        $fileNameSelfie = $user->name . 'Selfie' . '.' . $request->image2->extension();

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
            'kode' => $request->input('kode'),
            'user_email' => $user->email,
            'photoKtp' => $fileNameKTP,
            'photoSelfie' => $fileNameSelfie,
        ]);
        $user->verifikasi = "pending";
        $user->save();
        return redirect()->route('verifikasi')
                        ->with('success','Photo Telah Berhasil Diupload');
    }

    public function UpdatePhoto(Request $request, string $id){
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',

        ]);

        $user = User::find($id);
        $verify = Verify::where('user_email', '=', $user->email)->first();


        $fileNameKTP = $user->name . 'KTP' . '.' . $request->image->extension();
        $fileNameSelfie = $user->name . 'Selfie' . '.' . $request->image2->extension();

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
        $verify->kode = $request->input('kode');
        $verify->photoKtp =  $fileNameKTP;
        $verify->photoSelfie=   $fileNameSelfie ;
        $user->verifikasi = "pending";
        $user->save();
        $verify->save();

        return redirect()->route('verifikasi')
                        ->with('success','Photo Telah Berhasil Diupload');
    }
}
