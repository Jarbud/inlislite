<?php

namespace App\Http\Controllers;

use App\Models\BacaDiTempat;
use Illuminate\Http\Request;

class BacaDiTempatController extends Controller
{
    public function index()
    {
        $baca = BacaDiTempat::all();

        return view('admin/bacaditempat', compact("baca"));
    }
}
