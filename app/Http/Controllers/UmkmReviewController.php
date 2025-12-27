<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UmkmReview;
use App\Models\UmkmDestination;
use Illuminate\Support\Facades\Storage;

class UmkmReviewController extends Controller
{
    public function index()
    {
        $umkm_reviews = UmkmReview::with('umkmdestination')->latest()->get();
        return view('umkmreview.index', compact('umkm_reviews'));
    }

    public function detail($id)
    {
        // ambil destinasi beserta review
        $umkm = UmkmDestination::with('umkm_reviews')->findOrFail($id);
        return view('umkmdetail.index', compact('umkm'));
    }

    public function store(Request $request, $umkmId)
    {
        dd ($request->input());
        $request->validate([
            'name'   => 'required|string|max:100',
            'email'  => 'required|email',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'media'  => 'nullable|file|mimes:jpg,jpeg,png,mp4,avi|max:10240'
        ]);

        $path = null;
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('umkmreviews', 'public');
        }

        UmkmReview::create([
            'name'               => $request->name,
            'email'              => $request->email,
            'rating'             => $request->rating,
            'comment'            => $request->comment,
            'media_path'         => $path,
            'umkmdestination_id' => $umkmId, // hubungkan ke destinasi
        ]);

        return redirect()->back()->with('success', 'Ulasan berhasil dikirim!');
    }

    public function destroy($id)
    {
        $umkm_review = UmkmReview::findOrFail($id);

        if ($umkm_review->media_path) {
            Storage::disk('public')->delete($umkm_review->media_path);
        }

        $umkm_review->delete();

        return redirect()->back()->with('success', 'Ulasan berhasil dihapus!');
    }
}
