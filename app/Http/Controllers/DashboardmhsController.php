<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;
use Picqer\Barcode\BarcodeGeneratorHTML;


class DashboardmhsController extends Controller
{
    public function index()
    {
        $nim = User::where('no_pengenal', '=', Auth::user()->no_pengenal)->get();
        $generatorHTML = new BarcodeGeneratorHTML();
        $barcode = $generatorHTML->getBarcode($nim[0]->no_pengenal, $generatorHTML::TYPE_CODE_128);


        return view("admin/dashboardmahasiswa", compact("barcode", "nim"));
    }
}
