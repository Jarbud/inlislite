<?php

namespace App\Http\Controllers;
use App\Models\Members;
use App\Models\User;
use Carbon\Carbon;


use Illuminate\Http\Request;

class VeranggotaController extends Controller
{
    //
    public function index()
    {
        $no = 0;
        $results = Members::raw()->aggregate([
            [
                '$lookup' => [
                    'from' => 'master_jenis_identitas',
                    'localField' => 'IdentityType_id',
                    'foreignField' => 'id',
                    'as' => 'jenis_identitas'
                ]
            ],
            [
                '$lookup' => [
                    'from' => 'master_pekerjaan',
                    'localField' => 'Job_id',
                    'foreignField' => 'id',
                    'as' => 'master_pekerjaan'
                ]
            ],
            [
                '$lookup' => [
                    'from' => 'agama',
                    'localField' => 'Agama_id',
                    'foreignField' => 'ID',
                    'as' => 'agama'
                ]
            ],
            [
                '$lookup' => [
                    'from' => 'jenis_kelamin',
                    'localField' => 'Sex_id',
                    'foreignField' => 'ID',
                    'as' => 'jenis_kelamin'
                ]
            ],
            [
                '$lookup' => [
                    'from' => 'master_pendidikan',
                    'localField' => 'EducationLevel_id                    ',
                    'foreignField' => 'id',
                    'as' => 'master_pendidikan'
                ]
            ],
            [
                '$lookup' => [
                    'from' => 'master_status_perkawinan',
                    'localField' => 'MaritalStatus_id                    ',
                    'foreignField' => 'id',
                    'as' => 'status_perkawinan'
                ]
            ],
            // [
            //     '$lookup' => [
            //         'from' => 'master_status_perkawinan',
            //         'localField' => 'MaritalStatus_id                    ',
            //         'foreignField' => 'id',
            //         'as' => 'status_perkawinan'
            //     ]
            // ],
            // Other aggregation stages if needed
        ]);
        return view('admin/verifikasianggota',compact('results','no'));
    }

    public function show($id)
    {
        $ki = Members::find($id);
  
        return response()->json($ki);
    }

    public function updateStatusVerify(string $id,string $email, string $status){

        $member = Members::find($id);
        $user = User::where('email', '=', $email)->first();
        if($status == "accept"){
            $startDate = Carbon::now();
            $newDate = $startDate->addYear();
            $member->HasVerified = "true";
            $user->verifikasi = "true";
            $user->tgl_habis_anggota = $newDate->format('d/m/Y');
        }else if($status == "decline"){
            $member->HasVerified = "decline";
        }
        $member->save();
        $user->save();
        return redirect()->route('verifikasi-anggota')
                        ->with('success','User Telah Berhasil Diupdate');
    }
    public function updateStatusVerifyAnggotaDitolak(Request $request){

        $id = $request->input('kiID');
        $member = Members::find($id);
        $user = User::where('email', '=', $member->email)->first();
        $user->verifikasi = "decline";
        $member->HasVerified = "decline";
        $member->MsgDitolak = $request->input('MsgDitolak');
        $member->save();
        $user->save();
        return redirect()->route('verifikasi-anggota')
                        ->with('success','User Telah Berhasil Diupdate');
    }
}
