<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('pariwisata.index', [
            'destinations' => $destinations,
        ]);
    }

    public function detail($id)
    {
        $destination = Destination::where('id', $id)->with('reviews')->first();
        return view('Pariwisata.detail', [
            'destination' => $destination,
        ]);
    }
}
