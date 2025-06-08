<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('detail.index', compact('reviews'));
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
            $path = $request->file('media')->store('reviews', 'public');
        }

        Review::create([
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
        $review = Review::findOrFail($id);
        if ($review->media_path) {
            Storage::disk('public')->delete($review->media_path);
        }
        $review->delete();

        return redirect()->back()->with('success', 'Ulasan berhasil dihapus!');
    }
}
