<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use App\Models\catalogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sssCont extends Controller
{
    public function show()
    {
        $jenis_bahan = worksheets::all();
        $katalog = catalogs::paginate(18);

        return view('fromsearch', compact('jenis_bahan', 'katalog'));
    }

    
}
