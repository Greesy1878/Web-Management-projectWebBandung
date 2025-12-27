<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.index', compact('destinations'));
    }

    public function detail($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.detail', compact('destination'));
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.edit', compact('destination'));
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

        Destination::create($validated);

        Alert::success('Success', 'Berhasil menambahkan objek wisata');
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

        $destination = Destination::findOrFail($id);
        $destination->update($validated);

        Alert::success('Berhasil', 'Data objek wisata berhasil diperbarui');
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        Alert::success('Berhasil', 'Data objek wisata berhasil dihapus');
        return redirect()->route('admin.index');
    }
}
