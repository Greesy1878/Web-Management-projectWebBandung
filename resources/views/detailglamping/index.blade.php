<?php
// Database connection
$host = 'localhost';
$dbname = 'pariwisata';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . htmlspecialchars($e->getMessage());
    exit;
}

// Handle file upload function
function handleFileUpload($file)
{
    if (!isset($file) || $file['error'] !== UPLOAD_ERR_OK) {
        return null;
    }

    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/avi'];
    if (!in_array($file['type'], $allowedTypes)) {
        return null;
    }

    $uploadDir = 'uploads/reviews/';
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = uniqid() . '_' . basename($file['name']);
    $uploadPath = $uploadDir . $fileName;

    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
        return $uploadPath;
    }

    return null;
}

// Example destination data
$destination = [
    'id' => 1,
    'name' => 'Glamping Resort Rancabali',
    'description' => 'Bagi Anda yang ingin merasakan pengalaman menginap unik di tengah alam, Glamping Lakeside Rancabali bisa menjadi pilihan terbaik untuk liburan bersama keluarga maupun pasangan. Terletak di kawasan Rancabali, Kabupaten Bandung, destinasi ini menyuguhkan panorama Danau Situ Patenggang yang tenang, hamparan kebun teh yang hijau, serta udara pegunungan yang sejuk dan menyegarkan. Mengusung konsep glamorous camping, tempat ini menawarkan berbagai jenis akomodasi seperti tenda Lakeside, Keong Tent, dan Cabin dengan fasilitas lengkap layaknya hotel, namun tetap menyatu dengan alam. Salah satu ikon utamanya adalah Pinisi Resto, restoran berbentuk kapal besar yang berada di tepi danau dan menjadi spot foto favorit wisatawan.',
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
    'Area Camping & Penginapan',
    'Lokasi Sejarah',
    'Penyewaan Alat Camping',
    'Penawaran Wisata Gunung',
    'Jalur Tracking & Hiking'
];

// Handle review submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_review'])) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $comment = trim($_POST['comment'] ?? '');
    $rating = intval($_POST['rating'] ?? 0);

    // Validate inputs
    if (
        !empty($name) && !empty($email) && !empty($comment) &&
        $rating >= 1 && $rating <= 5 && filter_var($email, FILTER_VALIDATE_EMAIL)
    ) {

        // Handle file upload if present
        $mediaPath = null;
        if (isset($_FILES['media']) && $_FILES['media']['error'] === UPLOAD_ERR_OK) {
            $mediaPath = handleFileUpload($_FILES['media']);
        }

        try {
            $stmt = $pdo->prepare("INSERT INTO reviews (name, email, rating, comment, media_path, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())");
            $stmt->execute([$name, $email, $rating, $comment, $mediaPath]);
            header("Location: " . $_SERVER['PHP_SELF'] . "?success=1");
            exit;
        } catch (PDOException $e) {
            $error_message = "Gagal menyimpan ulasan. Silakan coba lagi.";
        }
    } else {
        $error_message = "Mohon lengkapi semua field dengan benar.";
    }
}

// Fetch reviews - updated to match new table structure
$stmt = $pdo->prepare("SELECT id, name, email, rating, comment, media_path, created_at FROM reviews ORDER BY created_at DESC LIMIT 20");
$stmt->execute();
$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Calculate average rating from reviews
$avgStmt = $pdo->prepare("SELECT AVG(rating) as avg_rating, COUNT(*) as total_reviews FROM reviews");
$avgStmt->execute();
$reviewStats = $avgStmt->fetch(PDO::FETCH_ASSOC);

// Update destination rating based on actual reviews
if ($reviewStats['total_reviews'] > 0) {
    $destination['rating'] = round($reviewStats['avg_rating'], 1);
    $destination['total_reviews'] = $reviewStats['total_reviews'];
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Destinasi - <?php echo htmlspecialchars($destination['name']); ?></title>
    <link rel="stylesheet" href="css/bandungCSS/detailpariwisatadanumkm.style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-links">
                    <a href="/" class="nav-link active">Home</a>
                    <a href="/pariwisata" class="nav-link">Pariwisata</a>
                    <a href="/umkm" class="nav-link">UMKM</a>
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
                            <img src="<?php echo htmlspecialchars($destination['images']['main']); ?>"
                                alt="<?php echo htmlspecialchars($destination['name']); ?>" />
                        </div>
                        <div class="thumbnail-images">
                            <?php foreach ($destination['images']['gallery'] as $image): ?>
                            <div class="thumbnail">
                                <img src="<?php    echo htmlspecialchars($image); ?>"
                                    alt="<?php    echo htmlspecialchars($destination['name']); ?>" />
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="rating-section">
                        <div class="rating-stars">
                            <?php
// Print full stars for integer part
$fullStars = floor($destination['rating']);
// Check if half star needed
$halfStar = ($destination['rating'] - $fullStars) >= 0.5;
// Total stars printed
for ($i = 1; $i <= 5; $i++):
    if ($i <= $fullStars):
        echo '<i class="fas fa-star active"></i>';
    elseif ($i == $fullStars + 1 && $halfStar):
        echo '<i class="fas fa-star-half-alt active"></i>';
    else:
        echo '<i class="fas fa-star"></i>';
    endif;
endfor;
                            ?>
                        </div>
                        <span class="rating-text">Rating: <?php echo number_format($destination['rating'], 1); ?>/5</span>
                    </div>

                    <!-- Title -->
                    <h2 class="destination-title"><?php echo htmlspecialchars($destination['name']); ?></h2>

                    <!-- Description -->
                    <div class="description">
                        <h3>Deskripsi</h3>
                        <p><?php echo nl2br(htmlspecialchars($destination['description'])); ?></p>
                    </div>

                    <!-- Facilities and Services -->
                    <div class="facilities-services">
                        <div class="facilities">
                            <h3>Fasilitas</h3>
                            <ul>
                                <?php foreach ($facilities as $facility): ?>
                                <li><i class="fas fa-check"></i> <?php    echo htmlspecialchars($facility); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="services">
                            <h3>Layanan</h3>
                            <ul>
                                <?php foreach ($services as $service): ?>
                                <li><i class="fas fa-check"></i> <?php    echo htmlspecialchars($service); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Rating Display -->
                    <div class="rating-display">
                        <div class="rating-score">
                            <span class="score"><?php echo number_format($destination['rating'], 1); ?></span>
                            <div class="rating-stars">
                                <?php
for ($i = 1; $i <= 5; $i++):
    echo '<i class="fas fa-star ' . ($i <= round($destination['rating']) ? 'active' : '') . '"></i>';
endfor;
                                ?>
                            </div>
                            <span class="total-reviews">(<?php echo intval($destination['total_reviews']); ?> Reviews)</span>
                        </div>
                    </div>

                    <!-- Visit Buttons -->
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
                            <span><?php echo htmlspecialchars($destination['instagram']); ?></span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span><?php echo htmlspecialchars($destination['contact']); ?></span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo htmlspecialchars($destination['location']); ?></span>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="map-container">
                        <h3>Peta Lokasi</h3>
                        <div id="map" style="height: 300px; border-radius: 10px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Review Form -->
    <div class="review-form">
        <div class="container">
            <h3>Beri Ulasan</h3>
            
            <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> Ulasan berhasil dikirim! Terima kasih atas feedback Anda.
            </div>
            <?php endif; ?>

            <?php if (isset($error_message)): ?>
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i> <?php    echo htmlspecialchars($error_message); ?>
            </div>
            <?php endif; ?>

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" required maxlength="100" 
                           value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required maxlength="150" 
                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select id="rating" name="rating" required>
                        <option value="">-- Pilih Rating --</option>
                        <option value="5" <?php echo (($_POST['rating'] ?? '') == '5') ? 'selected' : ''; ?>>⭐⭐⭐⭐⭐ - Luar Biasa</option>
                        <option value="4" <?php echo (($_POST['rating'] ?? '') == '4') ? 'selected' : ''; ?>>⭐⭐⭐⭐ - Sangat Bagus</option>
                        <option value="3" <?php echo (($_POST['rating'] ?? '') == '3') ? 'selected' : ''; ?>>⭐⭐⭐ - Bagus</option>
                        <option value="2" <?php echo (($_POST['rating'] ?? '') == '2') ? 'selected' : ''; ?>>⭐⭐ - Cukup</option>
                        <option value="1" <?php echo (($_POST['rating'] ?? '') == '1') ? 'selected' : ''; ?>>⭐ - Kurang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">Ulasan</label>
                    <textarea id="comment" name="comment" rows="4" required 
                              placeholder="Bagikan pengalaman Anda..."><?php echo htmlspecialchars($_POST['comment'] ?? ''); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="media">Upload Foto/Video (Opsional)</label>
                    <input type="file" id="media" name="media" 
                           accept="image/jpeg,image/jpg,image/png,image/gif,video/mp4,video/avi" />
                    <small class="form-text">Format yang didukung: JPG, PNG, GIF, MP4, AVI (Max 10MB)</small>
                </div>

                <button type="submit" name="submit_review" class="submit-btn">
                    <i class="fas fa-paper-plane"></i> Kirim Ulasan
                </button>
            </form>
        </div>
    </div>

    <!-- Review List -->
    <div class="review-list">
        <div class="container">
            <h3>Ulasan Pengunjung (<?php echo count($reviews); ?> Ulasan)</h3>
            
            <?php if (!empty($reviews)): ?>
                <div class="reviews-container">
                    <?php    foreach ($reviews as $review): ?>
                    <div class="review-item">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <strong class="reviewer-name"><?php        echo htmlspecialchars($review['name']); ?></strong>
                                <span class="review-date"><?php        echo date('d M Y, H:i', strtotime($review['created_at'])); ?></span>
                            </div>
                            <div class="review-rating">
                                <?php        for ($i = 1; $i <= 5; $i++): ?>
                                <i class="fas fa-star <?php            echo ($i <= $review['rating']) ? 'active' : ''; ?>"></i>
                                <?php        endfor; ?>
                                <span class="rating-value">(<?php        echo $review['rating']; ?>/5)</span>
                            </div>
                        </div>
                        
                        <div class="review-content">
                            <p><?php        echo nl2br(htmlspecialchars($review['comment'])); ?></p>
                            
                            <?php        if (!empty($review['media_path'])): ?>
                            <div class="review-media">
                                <?php 
                                $mediaPath = htmlspecialchars($review['media_path']);
            $fileExtension = strtolower(pathinfo($mediaPath, PATHINFO_EXTENSION));
                                ?>
                                
                                <?php            if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                                    <img src="<?php                echo $mediaPath; ?>" alt="Review media" class="review-image" 
                                         onclick="openMediaModal('<?php                echo $mediaPath; ?>', 'image')" />
                                <?php            elseif (in_array($fileExtension, ['mp4', 'avi'])): ?>
                                    <video controls class="review-video">
                                        <source src="<?php                echo $mediaPath; ?>" type="video/<?php                echo $fileExtension; ?>">
                                        Browser Anda tidak mendukung video tag.
                                    </video>
                                <?php            endif; ?>
                            </div>
                            <?php        endif; ?>
                        </div>
                        
                        <div class="review-actions">
                            <button class="like-btn" onclick="likeReview(<?php        echo $review['id']; ?>)">
                                <i class="fas fa-thumbs-up"></i> Suka
                            </button>
                            <button class="reply-btn" onclick="replyToReview(<?php        echo $review['id']; ?>)">
                                <i class="fas fa-reply"></i> Balas
                            </button>
                        </div>
                    </div>
                    <?php    endforeach; ?>
                </div>
                
                <!-- Load More Button -->
                <?php    if (count($reviews) >= 20): ?>
                <div class="load-more-section">
                    <button class="load-more-btn" onclick="loadMoreReviews()">
                        <i class="fas fa-chevron-down"></i> Muat Lebih Banyak
                    </button>
                </div>
                <?php    endif; ?>
                
            <?php else: ?>
            <div class="no-reviews">
                <i class="fas fa-star-o"></i>
                <p>Belum ada ulasan. Jadilah yang pertama memberikan ulasan!</p>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Media Modal -->
    <div id="mediaModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close" onclick="closeMediaModal()">&times;</span>
            <div id="modalMediaContainer"></div>
        </div>
    </div>

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

    <!-- Map Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize map
            var map = L.map('map').setView([-7.1135, 107.6191], 13);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.marker([-7.1135, 107.6191]).addTo(map)
                .bindPopup('<?php echo addslashes($destination['name']); ?>')
                .openPopup();
        });

        // Media modal functions
        function openMediaModal(mediaPath, type) {
            const modal = document.getElementById('mediaModal');
            const container = document.getElementById('modalMediaContainer');
            
            if (type === 'image') {
                container.innerHTML = `<img src="${mediaPath}" style="max-width: 100%; max-height: 80vh;" />`;
            } else if (type === 'video') {
                container.innerHTML = `<video controls style="max-width: 100%; max-height: 80vh;">
                    <source src="${mediaPath}" type="video/mp4">
                </video>`;
            }
            
            modal.style.display = 'block';
        }

        function closeMediaModal() {
            document.getElementById('mediaModal').style.display = 'none';
        }

        // Review interaction functions
        function likeReview(reviewId) {
            // Implement like functionality
            console.log('Like review:', reviewId);
        }

        function replyToReview(reviewId) {
            // Implement reply functionality
            console.log('Reply to review:', reviewId);
        }

        function loadMoreReviews() {
            // Implement load more functionality
            console.log('Load more reviews');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('mediaModal');
            if (event.target == modal) {
                closeMediaModal();
            }
        }
    </script>
</body>

</html>