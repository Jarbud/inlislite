<?php

namespace App\Http\Controllers;

use App\Models\worksheets;
use App\Models\catalogs;
use App\Models\collections;
use App\Models\Locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fromsearchController extends Controller
{

    public function show()
    {
        $jenis_bahan = worksheets::all();
        $katalog = catalogs::paginate(15);
        $koleksi = collections::paginate(2);

        return view('fromsearch', compact('jenis_bahan', 'katalog', 'koleksi'));
    }

    /*public function cari(Request $request)
    {
        $jenis_bahan = worksheets::all();
        $katalog = catalogs::paginate(18);
        
        if($request->name)
        {
            $result = catalogs::where('name','LIKE','%'.$request->name.'%')->get();
        }

        if($request->Title)
        {
            $result = catalogs::where('Title','LIKE','%'.$request->Title.'%')->get();
        }

        if($request->Author)
        {
            $result = catalogs::where('Author','LIKE','%'.$request->Author.'%')->get();
        }

        if($request->Publisher)
        {
            $result = catalogs::where('Publisher','LIKE','%'.$request->Publisher.'%')->get();
        }

        if($request->PublishYear)
        {
            $result = catalogs::where('PublishYear','LIKE','%'.$request->PublishYear.'%')->get();
        }

        if($request->worksheets)
        {
            $result = worksheets::where('Name','LIKE','%'.$request->worksheets.'%')->get();
        }

        return view('fromsearch', compact('jenis_bahan', 'katalog', 'result'));

        /*--if($request->Title)
        {
            return dd($request->Title);
            $result = catalogs::where('Title','LIKE','%'.$request->Title.'%')->get();
        }

        return view('fromsearch', compact('jenis_bahan', 'katalog'));--*/

        /*--$cari = $request->input('cari');

        $katalog = DB::table('catalogs')
        ->where('Title','like',"%".$cari."%")
        ->paginate();

        return view('fromsearch', compact('katalog'));
    }--*/

/*paginate

https://laravel.com/docs/10.x/pagination

*/

}
