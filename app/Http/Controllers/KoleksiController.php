<?php

namespace App\Http\Controllers;

use App\Models\CollectionMedias;
use App\Models\CollectionRules;
use App\Models\CollectionSources;
use App\Models\CollectionStatus;
use App\Models\LocationLibrary;
use App\Models\Locations;

use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    public function show()
    {
        $colsources = CollectionSources::all();
        $colmedias = CollectionMedias::all();
        $colrules = CollectionRules::all();
        $loclibrary = LocationLibrary::all();
        $location = Locations::all();
        $colstatus = CollectionStatus::all();

        return view('admin/koleksi1', compact('colsources', 'colmedias', 'colrules', 'loclibrary', 'location', 'colstatus'));
    }
}
