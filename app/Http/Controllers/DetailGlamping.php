<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailGlamping extends Controller
{
    public function index(Request $request)
    {
        return view('detailglamping.index');}
}
