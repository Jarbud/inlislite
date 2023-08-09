<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
}
