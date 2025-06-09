<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailGunungTangkuban extends Controller
{
    public function index(Request $request)
    {
        return view('detailgunungtangkuban.index');
    }
}
