<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\master_pendidikan;

class MasterPendidikanController extends Controller
{
    public function daftar2() {
        return view('daftar');
    }
}
