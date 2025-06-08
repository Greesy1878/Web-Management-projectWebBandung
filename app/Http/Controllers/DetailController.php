<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Destination; // Pastikan model Destination sudah dibuat
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $destinations = [
            1 => [
                'id' => 1,
                'name' => 'Gunung Tangkuban Perahu',
                'description' => 'Gunung berapi terkenal di Jawa Barat dengan kawah belerang.',
                'location' => 'Lembang, Jawa Barat',
                'price' => 'Rp 20.000',
                'rating' => 4.5,
                'image' => 'tangkubanperahu.jpg'
            ],
            2 => [
                'id' => 2,
                'name' => 'Pantai Pangandaran',
                'description' => 'Pantai indah dengan pasir putih dan ombak yang tenang.',
                'location' => 'Pangandaran, Jawa Barat',
                'price' => 'Rp 15.000',
                'rating' => 4.7,
                'image' => 'pangandaran.jpg'
            ],
            3 => [
                'id' => 3,
                'name' => 'Kawah Putih',
                'description' => 'Danau kawah dengan air berwarna putih kehijauan yang indah.',
                'location' => 'Ciwidey, Jawa Barat',
                'price' => 'Rp 25.000',
                'rating' => 4.6,
                'image' => 'kawahputih.jpg'
            ],
            4 => [
                'id' => 4,
                'name' => 'Curug Cimahi',
                'description' => 'Air terjun yang tinggi dan indah di tengah hutan.',
                'location' => 'Cimahi, Jawa Barat',
                'price' => 'Rp 10.000',
                'rating' => 4.3,
                'image' => 'curugcimahi.jpg'
            ],
            5 => [
                'id' => 5,
                'name' => 'Taman Safari Indonesia',
                'description' => 'Kebun binatang dan taman safari dengan berbagai satwa.',
                'location' => 'Cisarua, Jawa Barat',
                'price' => 'Rp 50.000',
                'rating' => 4.8,
                'image' => 'tamansafari.jpg'
            ],
            6 => [
                'id' => 6,
                'name' => 'Situ Patenggang',
                'description' => 'Danau indah dengan pemandangan pegunungan yang menakjubkan.',
                'location' => 'Ciwidey, Jawa Barat',
                'price' => 'Rp 30.000',
                'rating' => 4.4,
                'image' => 'situ_patenggang.jpg'
            ],
            // Tambahkan destinasi lainnya sesuai data kamu
            7 => [
                'id' => 7,
                'name' => 'Air Terjun Cikaso',
                'description' => 'Air terjun yang indah dengan tiga tingkat air terjun.',
                'location' => 'Sukabumi, Jawa Barat',
                'price' => 'Rp 15.000',
                'rating' => 4.5,
                'image' => 'cikaso.jpg'
            ],

            8 => [
                'id' => 8,
                'name' => 'Kebun Teh Rancabali',
                'description' => 'Kebun teh yang luas dengan pemandangan hijau yang menyejukkan.',
                'location' => 'Rancabali, Jawa Barat',
                'price' => 'Rp 15.000',
                'rating' => 4.2,
                'image' => 'kebunteh.jpg'
            ],
            // ... tambahkan destinasi lainnya sesuai data kamu
        ];

        $id = (int) $request->query('id', 1); // default ke ID 1
        if (!isset($destinations[$id])) {
            abort(404, 'Destinasi tidak ditemukan.');
        }

        $destination = $destinations[$id];
        $reviews = Review::where('destination_id', $id)->latest()->get();

        return view('detailgunungtangkuban.index', compact('destination', 'reviews'));
    }
}
