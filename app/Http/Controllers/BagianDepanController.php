<?php

namespace App\Http\Controllers;

use App\Models\catalogs;
use Illuminate\Http\Request;

class BagianDepanController extends Controller
{
    public function show()
    {
        $katalog = catalogs::paginate(6);
        $catalog = catalogs::paginate(4);

        $terbaru = catalogs::latest('CreateDate')->first();
        $katalogterbaru = $terbaru->paginate(4);

        $latest = catalogs::latest()->paginate(4);

        return view('index', compact('katalog', 'katalogterbaru', 'latest', 'catalog'));
    }
}
