<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;


class DashboardmhsController extends Controller
{
    public function index()
    {
        //$qrcodes = QrCode::size(120)->generate('www.google.com');
        return view("admin/dashboardmahasiswa");
    }
}
