<?php

namespace App\Http\Controllers;

use App\Models\UmkmDestination;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    public function index()
    {
        $umkmdestinations = UmkmDestination::all();
        return view('umkm.index', [
            'umkmdestinations' => $umkmdestinations,
        ]);
    }

    public function detail($id)
    {
        $umkmdestination = UmkmDestination::with('umkm_reviews')->findOrFail($id);

        return view('umkm.detail', [
            'umkmdestination' => $umkmdestination,
        ]);
    }
}
