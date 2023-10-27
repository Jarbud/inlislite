<?php

namespace App\Http\Controllers;
use App\Models\Karyailmiah;

use Illuminate\Http\Request;

class KaryailmiahadminController extends Controller
{
    //
    public function index()
    {
        // $ki = Karyailmiah::where('UserEmail', '=', Auth::user()->email)->get();
        $ki = Karyailmiah::all();
        $no = 0;
        return view('admin/karyailmiahadmin',compact('ki','no'));
    }

    public function show($id)
    {
        $ki = Karyailmiah::find($id);
  
        return response()->json($ki);
    }

    public function updateStatusVerifyKiAcc(string $id){

        $ki = Karyailmiah::find($id);
        $ki->Status = "acc";
        $ki->save();
        return redirect()->route('karya-ilmiah-admin')
                        ->with('success','User Telah Berhasil Diupdate');
    }

    public function updateStatusVerifyKiDitolak(Request $request){

        $id = $request->input('kiID');
        $ki = Karyailmiah::find($id);
        $ki->Status = "dec";
        $ki->MsgDitolak = $request->input('MsgDitolak');
        $ki->save();
        return redirect()->route('karya-ilmiah-admin')
                        ->with('success','User Telah Berhasil Diupdate');
    }
}
