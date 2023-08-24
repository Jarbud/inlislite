<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\master_jenis_identitas;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $kode = "";
        // $hitung = 0;
        // if($data['jenis_anggota_id'] == 1 ){
        //     $users = User::all();
        //     foreach ($users as $user){
        //         if($user->jenis_anggota_id == 1){
        //             $hitung++;
        //         }
        //     }
        //     $kode = "M-00".$hitung;
        // }elseif($data['jenis_anggota_id'] == 1){
        //     $users = User::all();
        //     foreach ($users as $user){
        //         if($user->jenis_anggota_id == 2){
        //             $hitung++;
        //         }
        //     }
        //     $kode = "U-00".$hitung;
        // }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'jenis_anggota_id' => $data['jenis_anggota_id'],
            'identitas_id' => $data['identitas'],
            'no_pengenal' => $data['no_pengenal'],
            'telp' => $data['telp'],
            'verifikasi' => "false",
            // 'kode_verifikasi' => $kode,
        ]);
        // return redirect()->route('dashboard');
    }
}
