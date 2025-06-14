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
    <div class="detail">
        <!-- Header -->
        <header class="header">
            <div class="list-5">
                <div>
                    <div class="item-6">
                        <a href="{{ url('/') }}" class="text-wrapper-36">Home</a>
                    </div>
                    <div class="item-7">
                        <a href="{{ url('/pariwisata') }}" class="text-wrapper-36">Pariwisata</a>
                    </div>
                    <div class="item-8">
                        <a href="{{ url('/umkm') }}" class="text-wrapper-36">UMKM</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero">
            <h1>Detail Destinasi</h1>
        </section>

        <main class="main-content">
            <!-- Left Column -->
            <div class="left-column">
                <!-- Image Gallery -->
                <div class="image-gallery">
                    <div class="main-image">
                        <img src="{{ $destination->image }}" alt="{{ $destination->title }}" />
                    </div>
                    <div class="thumbnail-images">
                        <div class="thumbnail">
                            <img src="{{ $destination->image }}" alt="{{ $destination->title }}" />
                        </div>
                        <div class="thumbnail">
                            <img src="{{ $destination->image }}" alt="{{ $destination->title }}" />
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
                    <div class="lokasi-section">
                    <h3 class="map-title">Peta Lokasi</h3>
                    <diV class="map-container">{!! $destination->map !!} </diV>
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
            <h3>Ulasan Pengunjung ({{ $destination->reviews->count() }} Ulasan)</h3>
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

      @yield('content')
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-column">
                <h3 class="footer-heading">Sagala bandung</h3>
                <p class="footer-text">
                    Hello, we are Lift Media. Our goal is to translate the positive effects from revolutionizing
                </p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3 class="footer-heading">Tentang</h3>
                <div class="footer-links">
                    <a href="#" class="footer-link">About Us</a>
                    <a href="#" class="footer-link">Our Services</a>
                    <a href="#" class="footer-link">Privacy Policy</a>
                    <a href="#" class="footer-link">Terms & Conditions</a>
                </div>
            </div>

            <div class="footer-column">
                <h3 class="footer-heading">Kontak</h3>
                <div class="contact-list">
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fas fa-phone-alt"></i></span>
                        <a href="tel:+6282121090209" class="contact-text">+62 821 2109 0209</a>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:sagalabandung@gmail.com" class="contact-text">sagalabandung@gmail.com</a>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <span class="contact-text">PBB I49, BANDUNG, INDONESIA</span>
                    </div>
                </div>
            </div>


        </div>

        <div class="copyright">
            © 2024 SagalaBandung. All rights reserved
        </div>
    </footer>

</html>
