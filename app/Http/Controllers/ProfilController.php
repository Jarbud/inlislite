<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $userid = Auth::user()->id;
        // $users = User::all();
        // return view('admin/usermanagement',compact('users','no'));
        return view('admin/profile');

    }

    public function storePhoto(Request $request, string $id){
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        

        $user = User::find($id);
        $fileName = $user->id . '.' . $request->image->extension();
        $path = public_path('images/' . $fileName);
        if(file_exists($path)){
            Storage::disk('s3')->delete($path);
        }else{
            $request->image->storeAs('public/images', $fileName);
        }
        $user->photo = $fileName;
        $user->save();
        return redirect()->route('profile')
                        ->with('success','Photo Telah Berhasil Diupdate');
    }
}
