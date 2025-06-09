<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detail Destinasi - Glamping Lakeside Rancabali</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
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
                            <img src="{{ $destination->image }}" alt="{{ $destination->title }}" />
                        </div>
                        <div class="thumbnail-images">
                            <div class="thumbnail">
                                <img src="images/gunung-puntang-1.jpg" alt="Glamping Lakeside Rancabali" />
                            </div>
                            <div class="thumbnail">
                                <img src="images/gunung-puntang-2.jpg" alt="Glamping Lakeside Rancabali" />
                            </div>
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="rating-section">
                        <div class="rating-stars">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star-half-alt active"></i>
                        </div>
                        <span class="rating-text">Rating: 4.5/5</span>
                    </div>

                    <!-- Title -->
                    <h2 class="destination-title">{{ $destination->title }}</h2>

                    <!-- Description -->
                    <div class="description">
                        <h3>Deskripsi</h3>
                        <p>{{ $destination->content }}</p>
                    </div>

                    <!-- Facilities and Services -->
                    <div class="facilities-services">
                        <div class="facilities">
                            <h3>Fasilitas</h3>
                            <ul>
                                <li><i class="fas fa-check"></i> Sistem Pembayaran Digital</li>
                                <li><i class="fas fa-check"></i> Toilet</li>
                                <li><i class="fas fa-check"></i> Area Parkir</li>
                                <li><i class="fas fa-check"></i> Spot Foto</li>
                                <li><i class="fas fa-check"></i> Sewa Direkam</li>
                            </ul>
                        </div>
                        <div class="services">
                            <h3>Layanan</h3>
                            <ul>
                                <li><i class="fas fa-check"></i> Area Camping & Penginapan</li>
                                <li><i class="fas fa-check"></i> Lokasi Sejarah</li>
                                <li><i class="fas fa-check"></i> Penyewaan Alat Camping</li>
                                <li><i class="fas fa-check"></i> Penawaran Wisata Gunung</li>
                                <li><i class="fas fa-check"></i> Jalur Tracking & Hiking</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Rating Display -->
                    <div class="rating-display">
                        <div class="rating-score">
                            <span class="score">4.5</span>
                            <div class="rating-stars">
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="total-reviews">(127 Reviews)</span>
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
                            <span>@gunungpuntang_id</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>098-890-503</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Majalengka Wol, Bandung, Kabupaten Bandung, Jawa Barat</span>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="contact-info">
                        <h3>Peta Lokasi</h3>
                        {!! $destination->map !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Review Form -->
    <div class="review-form">
        <div class="container">
            <h3>Beri Ulasan</h3>

            <form action="{{ route('rating.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="destination_id" value="{{ $destination->id }}" />
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" required maxlength="100" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required maxlength="150" />
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select id="rating" name="rating" required>
                        <option value="">-- Pilih Rating --</option>
                        <option value="5">⭐⭐⭐⭐⭐ - Luar Biasa</option>
                        <option value="4">⭐⭐⭐⭐ - Sangat Bagus</option>
                        <option value="3">⭐⭐⭐ - Bagus</option>
                        <option value="2">⭐⭐ - Cukup</option>
                        <option value="1">⭐ - Kurang</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="comment">Ulasan</label>
                    <textarea id="comment" name="comment" rows="4" required placeholder="Bagikan pengalaman Anda..."></textarea>
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
            <h3>Ulasan Pengunjung (3 Ulasan)</h3>

            <div class="reviews-container">
                @foreach ($destination->reviews as $review)
                    <div class="review-item">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <strong class="reviewer-name">{{ $review->name }}</strong>
                                <span class="review-date">{{ $review->created_at }}</span>
                            </div>
                            <div class="review-rating">
                                @for ($i = 1; $i < $review->rating; $i++)
                                    <i class="fas fa-star active"></i>
                                @endfor
                                <i class="fas fa-star active"></i>

                                <span class="rating-value">({{ $review->rating }}/5)</span>
                            </div>
                        </div>

                        <div class="review-content">
                            @if ($review->media_path)
                                <img src="/{{ $review->media_path }}" alt="">
                            @endif
                            <p>{{ $review->comment }}</p>
                            </p>
                        </div>

                        <div class="review-actions">
                            <button class="like-btn" onclick="likeReview(1)">
                                <i class="fas fa-thumbs-up"></i> Suka
                            </button>
                            <button class="reply-btn" onclick="replyToReview(1)">
                                <i class="fas fa-reply"></i> Balas
                            </button>
                        </div>
                    </div>
                @endforeach


            </div>
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
                    <p>Hello, we are LFI Media. Our goal is to provide innovative and creative solutions from
                        manufacturing.</p>
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
