<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class NewpasswordController extends Controller
{
    //
    public function newpassword(Request $request, string $id)
    {
        //
        $user = User::find($id);
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return redirect()->route('usermanagement.index')
                        ->with('success','Password User Telah Berhasil Diupdate');
    }
}
