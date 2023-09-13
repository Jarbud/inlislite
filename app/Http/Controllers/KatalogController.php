<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\worksheets;
use App\Models\kata_sandang;
use App\Models\RefferenceItems;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function show()
    {
        $jenisBahan = worksheets::all();
        $kataSandang = kata_sandang::all();
        $refitems = RefferenceItems::where('Refference_id', '5')->get();
        $refkarya = RefferenceItems::where('Refference_id', '17')->get();
        return view('admin/katalog1', compact('jenisBahan', 'kataSandang', 'refitems', 'refkarya'));
    }

    public function store(Request $request)
    {
        $data = $request->all();


        Catalog::create($data);


        return redirect('katalog');
    }
}
