<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailSunrise extends Controller
{
    public function index(Request $request)
    {
        return view('detailsunrise.index');}
}
