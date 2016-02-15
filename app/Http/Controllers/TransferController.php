<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Log;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TransferController extends Controller
{
    public function store(Request $request)
    {
        Log::error(var_export(['headers' => $request->headers, 'post' => $request->all()], true));
        return response()->json(['status' => 'ok']);

    }
}
