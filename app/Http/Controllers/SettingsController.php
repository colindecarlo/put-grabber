<?php

namespace App\Http\Controllers;

use App\Putio;
use App\PutioToken;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }
}
