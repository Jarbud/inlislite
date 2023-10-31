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

        return view('fromsearch', compact('jenis_bahan', 'katalog'));
    }

    public function search(Request $request)
    {
        $inputsearch = $request->input('inputsearch');
        $jenispencarian = $request->input('jenispencarian');
        $jenisbahan = $request->input('jenisbahan');

        $query = catalogs::query();

        if (!empty($inputsearch)) {
            $query->where(function ($q) use ($inputsearch, $jenispencarian) {
                if ($jenispencarian == 'Title') {
                    $q->orWhere('Title', 'like', '%' . $inputsearch . '%');
                } elseif ($jenispencarian == 'Author') {
                    $q->orWhere('Author', 'like', '%' . $inputsearch . '%');
                } elseif ($jenispencarian == 'Publisher') {
                    $q->orWhere('Publisher', 'like', '%' . $inputsearch . '%');
                } elseif ($jenispencarian == 'PublishYear') {
                    $q->orWhere('PublishYear', 'like', '%' . $inputsearch . '%');
                }
            });
        }

        if (!empty($jenisbahan)) {
            $query->where('jenisbahan', $jenisbahan);
        }
    
        $katalog = $query->paginate(15);
        $jenis_bahan = worksheets::all();
    
        return view('fromsearch', compact('jenis_bahan', 'katalog'));
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
