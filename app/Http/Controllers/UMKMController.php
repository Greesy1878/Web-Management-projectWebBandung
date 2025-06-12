<?php

namespace App\Http\Controllers;

use App\Models\UmkmDestination;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UMKMController extends Controller
{
    public function index()
    {
        $umkmdestinations = UmkmDestination::all();
        return view('umkm.index', [
            'umkmdestinations' => $umkmdestinations,
        ]);
    }

    public function adminIndex()
    {
        $umkmdestinations = UmkmDestination::all();
        return view('admin.umkm', [
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

        $object = UmkmDestination::create($validated);

        Alert::success('Success', 'Berhasil menambahakn desinasi UMKM');
        return back();
    }
}
