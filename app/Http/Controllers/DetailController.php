<?php

namespace App\Http\Controllers;

use App\Models\Review;

class DetailController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('detailgunungtangkuban.index', compact('reviews'));
    }
}
