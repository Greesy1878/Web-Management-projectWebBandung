<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'service' => 'nullable|string',
            'map' => 'nullable|string',
            'lokasi' => 'nullable|string|max:255',
            'image' => 'nullable|url|max:500',
            'imageberita' => 'nullable|url|max:500',
            'imagedestination' => 'nullable|url|max:500',
        ]);

        $object = Destination::create($validated);

        Alert::success('Success', 'Berhasil menambahakn objek wisata');
        return back();
    }
}
