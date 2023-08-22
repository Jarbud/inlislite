<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsermanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $no = 0;
        return view('admin/usermanagement',compact('users','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'jenis_anggota_id' => $request->input('jenis_anggota_id'),
            'no_pengenal' => $request->input('no_pengenal'),
            'telp' => $request->input('telp'),
        ]);

        return redirect()->route('usermanagement.index')
                        ->with('success','User Telah Berhasil Ditambahkan.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_pengenal' => ['required'],
            'telp' => ['required'],

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        //
        $user = User::find($id);
        return view('admin.edituser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->jenis_anggota_id = $request->get('jenis_anggota_id');
        $user->no_pengenal = $request->get('no_pengenal');
        $user->telp = $request->get('telp');
        $user->save();
        return redirect()->route('usermanagement.index')
                        ->with('success','User Telah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return redirect()->route('usermanagement.index')
                        ->with('success','User Telah Berhasil Dihapus');
    }

    
}
