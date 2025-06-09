<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\UmkmReview;
use Illuminate\Support\Facades\Storage;

class UmkmReviewController extends Controller
{
    public function index()
    {
        $umkm_reviews = UmkmReview::latest()->get();
        return view('umkmreview.index', compact('umkm_reviews'));
    }

    public function detail()
    {
        $umkmreviews = UmkmReview::latest()->get();
        return view('umkmdetail.index', compact('umkm_reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,avi|max:10240' // max 10MB
        ]);

        $path = null;
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('umkmreviews', 'public');
        }

        UmkmReview::create([
            'name' => $request->name,
            'email' => $request->email,
            'rating' => $request->rating,
            'comment' => $request->comment,
            'media_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Ulasan berhasil dikirim!');
    }

    public function destroy($id)
    {
        $umkm_review = UmkmReview::findOrFail($id);
        if ($umk_mreview->media_path) {
            Storage::disk('public')->delete($umkm_review->media_path);
        }
        $umkm_review->delete();

        return redirect()->back()->with('success', 'Ulasan berhasil dihapus!');
    }
}