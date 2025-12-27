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
        return view('umkm.index', compact('umkmdestinations'));
    }

    public function adminIndex()
    {
        $umkmdestinations = UmkmDestination::all();
        return view('admin.umkm', compact('umkmdestinations'));
    }

    public function detail($id)
    {
        $umkmdestination = UmkmDestination::with('umkm_reviews')->findOrFail($id);
        return view('umkm.detail', compact('umkmdestination'));
    }

    public function edit($id)
    {
        $umkmdestination = UmkmDestination::with('umkm_reviews')->findOrFail($id);
        return view('umkm.edit', compact('umkmdestination'));
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

        UmkmDestination::create($validated);

        Alert::success('Success', 'Berhasil menambahkan destinasi UMKM');
        return back();
    }

    public function update(Request $request, $id)
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

        $umkm = UmkmDestination::findOrFail($id);
        $umkm->update($validated);

        Alert::success('Berhasil', 'Data UMKM berhasil diperbarui');
        return redirect()->route('umkm.index');
    }

    public function destroy($id)
    {
        $umkm = UmkmDestination::findOrFail($id);
        $umkm->delete();

        Alert::success('Berhasil', 'Data UMKM berhasil dihapus');
        return redirect()->route('umkm.index');
    }
}
