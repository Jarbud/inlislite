<?php

namespace App\Http\Controllers;

use App\Models\catalogs;
use App\Models\worksheets;
use DataTables;
use Illuminate\Http\Request;

class PencarianKoleksiController extends Controller
{
    public function show()
    {
        $katalog = catalogs::paginate(15);
        $koleksi = collections::all();
        $jenis_bahan = worksheets::all();

        return view('pencariankoleksi', compact('katalog', 'jenis_bahan', 'koleksi'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $page = $request->input('page', 1);
        $katalog = catalogs::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('Title', 'like', '%' . $query . '%')
                         ->orWhere('Author', 'like', '%' . $query . '%')
                         ->orWhere('Publisher', 'like', '%' . $query . '%')
                         ->orWhere('PublishYear', 'like', '%' . $query . '%')
                         ->orWhere('Subject', 'like', '%' . $query . '%');
        })->paginate(15, ['*'], 'page', $page);

        return view('pencariankoleksi', compact('katalog', 'query'));
    }

    public function viewDetail($id)
    {
        $katalog = catalogs::find($id); // Mengambil data katalog berdasarkan ID
        $koleksi = collections::where('id', $katalog->collection_id)->get(); // Mengambil koleksi yang sesuai dengan ID koleksi pada data katalog

        return view('ViewDetail', compact('katalog', 'koleksi'));
    }

}
