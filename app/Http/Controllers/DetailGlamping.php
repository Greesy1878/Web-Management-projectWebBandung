<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class DetailGlamping extends Controller
{
    public function index(Request $request)
    {
        return view('detailglamping.index');
    }

    public function store(Request $request)
    {
      $data = $request->validate([
        'name' => 'required|string|max:255',
          'rating' => 'required|integer|min:1|max:5',
          'comment' => 'nullable|string|max:255',
          'media' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
          'email' => 'required|email|max:255',
      ]);
      $file = $request->file('media');
      if ($file) {
          $filename = time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path('uploads'), $filename);
          $data['media_path'] = 'uploads/' . $filename;
      } else {
          $data['media_path'] = null;
      }

        // Simpan data ke database atau lakukan proses lain sesuai kebutuhan
        Review::create($data);
        return redirect()->route('detailglamping.dashboard')->with('success', 'Review submitted successfully!');
    }
}
