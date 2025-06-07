<?php
// Database connection (example)
$host = 'localhost';
$dbname = 'pariwisata';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Get destination data (example data)
$destination = [
    'id' => 1,
    'name' => 'Gunung Puntang',
    'description' => 'Bukit Arca adalah salah satu tempat menarik wisata alam dengan berbagai fasilitas, destinasi wisata Gunung Puntang yang terletak berada di daerah Cimaung, Kecamatan Cimaung, Kabupaten Bandung, Jawa Barat. Letaktak di atas menara pihon dapat untuk berswafoto bersama passion sebagai Gunung puntang melewati kawasan wisata. Trekking atau pendakian terlekat Gunung Puntang melalui jalur pemandangan. Saat ini Gunung Puntang memiliki beberapa tempat puncak yang bernama Puncak Mega dengan ketinggian berada di 2.222 mdpl. Perlu diketahui, bagi pengunjung yang berniat melakukan foto pendakian dalam Gunung Puntang, untuk dapat melakukan persiapan dan waktu sekitar 3-4 jam untuk bisa mencapai area Puncak Mega. Sementara itu, pengunjung juga dapat melakukan',
    'rating' => 4.5,
    'total_reviews' => 127,
    'location' => 'Majalengka Wol, Bandung, Kabupaten Bandung, Jawa Barat',
    'contact' => '098-890-503',
    'instagram' => '@gunungpuntang_id',
    'images' => [
        'main' => 'images/gunung-puntang-main.jpg',
        'gallery' => [
            'images/gunung-puntang-1.jpg',
            'images/gunung-puntang-2.jpg'
        ]
    ]
];

$facilities = [
    'Sistem Pembayaran Digital',
    'Toilet',
    'Area Parkir',
    'Spot Foto',
    'Sewa Direkam'
];

$services = [
    'Area Camping & Pentemanan',
    'Lokasi Sejarah',
    'Penyewaan Alat Camping',
    'Penawaran Wisata Gunung',
    'Jalur Tracking & Hiking'
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi - <?php echo $destination['name']; ?></title>
    <link rel="stylesheet" href="{{asset('css/bandungCSS/detailpariwisatadanumkm.style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-links">
                    <a href="{{ url('/') }}" class="nav-link active">Home</a>
                    <a href="{{ url('/pariwisata') }}" class="nav-link active">Pariwisata</a>
                    <a href="{{ url('/umkm') }}" class="nav-link active">UMKM</a>
                </div>
                <button class="login-btn">Login</button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Detail Destinasi</h1>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="content-wrapper">
                <!-- Left Column -->
                <div class="left-column">
                    <!-- Image Gallery -->
                    <div class="image-gallery">
                        <div class="main-image">
                            <img src="<?php echo $destination['images']['main']; ?>" alt="<?php echo $destination['name']; ?>">
                        </div>
                        <div class="thumbnail-images">
                            <?php foreach($destination['images']['gallery'] as $image): ?>
                            <div class="thumbnail">
                                <img src="<?php echo $image; ?>" alt="<?php echo $destination['name']; ?>">
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="rating-section">
                        <div class="rating-stars">
                            <?php for($i = 1; $i <= 5; $i++): ?>
                                <i class="fas fa-star <?php echo $i <= $destination['rating'] ? 'active' : ''; ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <span class="rating-text">Puncak Mega dengan ketinggian</span>
                    </div>

                    <!-- Title -->
                    <h2 class="destination-title"><?php echo $destination['name']; ?></h2>

                    <!-- Description -->
                    <div class="description">
                        <h3>Deskripsi</h3>
                        <p><?php echo $destination['description']; ?></p>
                    </div>

                    <!-- Facilities and Services -->
                    <div class="facilities-services">
                        <div class="facilities">
                            <h3>Fasilitas</h3>
                            <ul>
                                <?php foreach($facilities as $facility): ?>
                                <li><i class="fas fa-check"></i> <?php echo $facility; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="services">
                            <h3>Layanan</h3>
                            <ul>
                                <?php foreach($services as $service): ?>
                                <li><i class="fas fa-check"></i> <?php echo $service; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Rating Display -->
                    <div class="rating-display">
                        <div class="rating-score">
                            <span class="score"><?php echo number_format($destination['rating'], 1); ?></span>
                            <div class="rating-stars">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <i class="fas fa-star <?php echo $i <= $destination['rating'] ? 'active' : ''; ?>"></i>
                                <?php endfor; ?>
                            </div>
                            <span class="total-reviews">(<?php echo $destination['total_reviews']; ?> Reviews)</span>
                        </div>
                    </div>

                    <!-- Visit Button -->
                    <button class="visit-btn">Kunjungi</button>
                    <button class="visit-btn">Ulasan</button>
                </div>

                <!-- Right Column -->
                <div class="right-column">
                    <!-- Contact Info -->
                    <div class="contact-info">
                        <h3>Kontak Informasi</h3>
                        <div class="contact-item">
                            <i class="fas fa-user"></i>
                            <span>@gunungpuntang</span>
                        </div>
                        <div class="contact-item">
                            <i class="fab fa-instagram"></i>
                            <span><?php echo $destination['instagram']; ?></span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span><?php echo $destination['contact']; ?></span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo $destination['location']; ?></span>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="map-container">
                        <div class="map-placeholder">
                            <i class="fas fa-map"></i>
                            <p>Map akan ditampilkan di sini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Pagination -->
    <div class="pagination">
        <div class="container">
            <div class="pagination-wrapper">
                <span class="page-number active">1</span>
                <span class="page-number">2</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Sagala Bandung</h4>
                    <p>Hello, we are LFI Media. Our goal is to provide innovative and creative solutions from manufacturing.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Tentang</h4>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Kontak</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> +6285171200999</li>
                        <li><i class="fas fa-envelope"></i> sagalabdg@gmail.com</li>
                        <li><i class="fas fa-map-marker-alt"></i> LFI, Bandung, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SagalaBandung. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>