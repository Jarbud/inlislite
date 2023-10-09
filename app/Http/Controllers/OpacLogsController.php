<?php

namespace App\Http\Controllers;

use App\Models\OpacLogs;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class OpacLogsController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->input('page', 10);
        $data = OpacLogs::paginate($perPage);
        //$data = OpacLogs::all();

        return view('admin/opac/historisederhana', compact('data'));
    }
}
