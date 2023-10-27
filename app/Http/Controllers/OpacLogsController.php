<?php

namespace App\Http\Controllers;

use App\Models\OpacLogs;
use Illuminate\Http\Request;

class OpacLogsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('page', 10);
        $data = OpacLogs::paginate($perPage);
        //$data = OpacLogs::all();

        return view('admin/opac/historisederhana', compact('data'));
    }

    function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $perPage = $request->input('page', 10);
            $data = OpacLogs::paginate($perPage);
            return view('pagination_data', compact('data'))->render();
        }
    }
}
