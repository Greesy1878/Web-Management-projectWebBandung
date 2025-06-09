<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class DestinationController extends Controller
// {
//     public function show(Request $request)
// {
//     $destinations = [
//         // 1 => [
//         //     'id' => 1,
//         //     'name' => 'Gunung Tangkuban Perahu',
//         //     'description' => 'Gunung berapi terkenal di Jawa Barat dengan kawah belerang.',
//         //     'location' => 'Lembang, Jawa Barat',
//         //     'price' => 'Rp 20.000',
//         //     'rating' => 4.5,
//         //     'image' => 'tangkubanperahu.jpg'
//         // ]
//         // 2 => [
//         //     'id' => 2,
//         //     'name' => 'Pantai Pangandaran',
//         //     'description' => 'Pantai indah dengan pasir putih dan ombak yang tenang.',
//         //     'location' => 'Pangandaran, Jawa Barat',
//         //     'price' => 'Rp 15.000',
//         //     'rating' => 4.7,
//         //     'image' => 'pangandaran.jpg'
//         // ],
//         // 3 => [
//         //     'id' => 3,
//         //     'name' => 'Kawah Putih',
//         //     'description' => 'Danau kawah dengan air berwarna putih kehijauan yang indah.',
//         //     'location' => 'Ciwidey, Jawa Barat',
//         //     'price' => 'Rp 25.000',
//         //     'rating' => 4.6,
//         //     'image' => 'kawahputih.jpg'
//         // ],
//     //     4 => [
//     //         'id' => 4,
//     //         'name' => 'Curug Cimahi',
//     //         'description' => 'Air terjun yang tinggi dan indah di tengah hutan.',
//     //         'location' => 'Cimahi, Jawa Barat',
//     //         'price' => 'Rp 10.000',
//     //         'rating' => 4.3,
//     //         'image' => 'curugcimahi.jpg'
//     //     ],
//     //     5 => [
//     //         'id' => 5,
//     //         'name' => 'Taman Safari Indonesia',
//     //         'description' => 'Kebun binatang dan taman safari dengan berbagai satwa.',
//     //         'location' => 'Cisarua, Jawa Barat',
//     //         'price' => 'Rp 50.000',
//     //         'rating' => 4.8,
//     //         'image' => 'tamansafari.jpg'
//     //     ],
//     //     6 => [
//     //         'id' => 6,
//     //         'name' => 'Situ Patenggang',
//     //         'description' => 'Danau indah dengan pemandangan pegunungan yang menakjubkan.',
//     //         'location' => 'Ciwidey, Jawa Barat',
//     //         'price' => 'Rp 20.000',
//     //         'rating' => 4.4,
//     //         'image' => 'situ.jpg'
//     //     ],
//     //     7 => [
//     //         'id' => 7,
//     //         'name' => 'Kebun Teh Rancabali',
//     //         'description' => 'Kebun teh yang luas dengan pemandangan hijau yang menyejukkan.',
//     //         'location' => 'Rancabali, Jawa Barat',
//     //         'price' => 'Rp 15.000',
//     //         'rating' => 4.2,
//     //         'image' => 'kebunteh.jpg'
//     //     ],
//     //     8 => [
//     //         'id' => 8,
//     //         'name' => 'Air Terjun Maribaya',
//     //         'description' => 'Air terjun yang indah dengan suasana alam yang tenang.',
//     //         'location' => 'Lembang, Jawa Barat',
//     //         'price' => 'Rp 12.000',
//     //         'rating' => 4.1,
//     //         'image' => 'maribaya.jpg'
//     //     ],
//     //     9 => [
//     //         'id' => 9,
//     //         'name' => 'Tangkuban Perahu',
//     //         'description' => 'Gunung berapi yang terkenal dengan kawahnya yang indah.',
//     //         'location' => 'Lembang, Jawa Barat',
//     //         'price' => 'Rp 30.000',
//     //         'rating' => 4.5,
//     //         'image' => 'tangkubanperahu.jpg'
//     //     ],
//     //     10 => [
//     //         'id' => 10,
//     //         'name' => 'Pantai Karang Nini',
//     //         'description' => 'Pantai yang tenang dengan pemandangan matahari terbenam yang indah.',
//     //         'location' => 'Cilacap, Jawa Tengah',
//     //         'price' => 'Rp 18.000',
//     //         'rating' => 4.6,
//     //         'image' => 'karangnini.jpg'
//     //     ],
//     ];

//     $id = $request->query('id', 1); // default ke 1
//     if (!isset($destinations[$id])) {
//         abort(404, 'Destinasi tidak ditemukan.');
    
//     }

//     return view('detail', ['destination' => $destinations[$id]]);
// }

// }
