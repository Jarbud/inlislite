<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Verify;
use Jenssegers\Mongodb\Facades\MongoDB;
use MongoDB\BSON\ObjectId;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class VeraccountController extends Controller
{
    //
    public function index()
    {
        $no = 0;
        $results = Verify::raw()->aggregate([
            [
                '$lookup' => [
                    'from' => 'users',
                    'localField' => 'user_email',
                    'foreignField' => 'email',
                    'as' => 'joined_data'
                ]
            ],
            // Other aggregation stages if needed
        ]);
        return view('admin/verifikasiakun',compact('results','no'));
    }

    public function updateStatusVerify(string $id, string $status){

        $user = User::find($id);
        if($status == "accept"){
            $startDate = Carbon::now();
            $daysToAdd = 30;
            $newDate = $startDate->addDays($daysToAdd);
            $user->verifikasi = "true";
            $user->tgl_habis_anggota = $newDate->format('d/m/Y');
        }else if($status == "decline"){
            $user->verifikasi = "decline";
        }
        $user->save();
        return redirect()->route('verifikasi-account')
                        ->with('success','User Telah Berhasil Diupdate');
    }
}
