<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Sagala Bandung - Pariwisata & UMKM</title>
    <link rel="stylesheet" href="{{ asset('css/bandungCSS/pariwisatadanumkam.style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>

<body>
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

    <section class="hero-section">
        <div class="hero-background">
            <div class="background-slide slide-1 active"></div>
            <div class="background-slide slide-2"></div>
            <div class="background-slide slide-3"></div>
            <div class="background-slide slide-4"></div>
        </div>

        <!-- Overlay -->
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <!-- Tulisan tengah -->
            <div class="centered-text">
                <div class="hero-subtitle">sagala</div>
                <div class="hero-title">BANDUNG</div>
            </div>

            <!-- Gambar angklung -->
            <img src="/img/bandung_img/angklung.png" alt="Angklung" class="angklung-icon">

            <!-- Deskripsi di kanan -->
            <div class="hero-description">
                Sejak dahulu Bandung dikenal sebagai Paris Van Java dan Kota Kembang, Bandung pun dijuluki The Most
                European
                City in The East Indies, Bandung Excelsior, Intelectuele Centrum Van Indie, Europe in The Tropen,
                Kota
                Permai, Kota Pendidikan, Kota Kreatif hingga Kota Kuliner.
            </div>
        </div>
        <!-- Slideshow indicators -->
        <div class="slideshow-indicators">
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
            <div class="indicator" data-slide="3"></div>
        </div>
    </section>

    <script>
        class HeroSlideshow {
            constructor() {
                this.slides = document.querySelectorAll('.background-slide');
                this.indicators = document.querySelectorAll('.indicator');
                this.currentSlide = 0;
                this.slideInterval = null;
                this.autoPlayDuration = 4000; // 5 detik

                this.init();
            }

            init() {
                // Event listeners untuk indicators
                this.indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        this.goToSlide(index);
                        this.resetAutoPlay();
                    });
                });

                // Mulai autoplay
                this.startAutoPlay();

                // Pause saat hover, resume saat mouse leave
                const heroSection = document.querySelector('.hero-section');
                heroSection.addEventListener('mouseenter', () => this.pauseAutoPlay());
                heroSection.addEventListener('mouseleave', () => this.startAutoPlay());
            }

            goToSlide(slideIndex) {
                // Remove active class dari slide dan indicator saat ini
                this.slides[this.currentSlide].classList.remove('active');
                this.indicators[this.currentSlide].classList.remove('active');

                // Update index slide
                this.currentSlide = slideIndex;

                // Add active class ke slide dan indicator baru
                this.slides[this.currentSlide].classList.add('active');
                this.indicators[this.currentSlide].classList.add('active');
            }

            nextSlide() {
                const nextIndex = (this.currentSlide + 1) % this.slides.length;
                this.goToSlide(nextIndex);
            }

            startAutoPlay() {
                this.slideInterval = setInterval(() => {
                    this.nextSlide();
                }, this.autoPlayDuration);
            }

            pauseAutoPlay() {
                if (this.slideInterval) {
                    clearInterval(this.slideInterval);
                    this.slideInterval = null;
                }
            }

            resetAutoPlay() {
                this.pauseAutoPlay();
                this.startAutoPlay();
            }
        }

        // Inisialisasi slideshow setelah DOM loaded
        document.addEventListener('DOMContentLoaded', () => {
            new HeroSlideshow();
        });

        // Smooth scroll effect untuk indicators
        document.querySelectorAll('.indicator').forEach(indicator => {
            indicator.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.3)';
            });

            indicator.addEventListener('mouseleave', function() {
                if (!this.classList.contains('active')) {
                    this.style.transform = 'scale(1)';
                }
            });
        });
    </script>

    <!-- Rekomendasi UMKM -->
    <div class="rekomendasi section">
        <div class="container">
            <div class="container-17 section-title">
                <div class="text-wrapper-25">Rekomendasi</div>
                <div class="heading">
                    <div class="rekomendasi-trip">Rekomendasi Trip Wisata  Populer Kabupaten Bandung</div>
                    <div class="rekomendasi-trip">Populer Kabupaten Bandung</div>
                </div>
            </div>

            <!-- Grid container DI LUAR foreach -->
            <div class="rekomendasi-grid">
                @foreach ($destinations as $destination)
                <div class="rekomendasibackground-border">
                    <button class="button">
                        <div class="text-wrapper-26">Populer</div>
                    </button>
                    <div class="icon-9"></div>
                    <div class="pull-image">
                        <img src="{{ $destination->image }}" alt="{{ $destination->title }}" />
                    </div>
                    <div class="text-wrapper-27">{{ $destination->lokasi }}</div>
                    <div class="text-wrapper-28">{{ $destination->title }}</div>
                    <div class="list-4">
                        <div class="item-5">4.5(6n966)</div>
                    </div>
                    <a href="{{ route('pariwisata.detail', ['id' => $destination]) }}"
                        class="btn-telusuri">Telusuri</a>
                </div>
                @endforeach
            </div>

            <div class="element-15">
                <a href="#" class="text-wrapper-30">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Testimoni -->
    <div class="testimoni section">
        <div class="container">
            <div class="paragraph">
                <div class="text-wrapper-24">Testimoni</div>
                <div class="heading-what-our">Apa Kata Wisatawan?</div>
            </div>
            <div class="container-16">
                <!-- Testimonial Card 1 -->
                <div class="testimonial-card group-5">
                    <div class="testimonial-header">
                        <div class="user-avatar" style="background: #4CAF50;">YO</div>
                        <div class="user-info">
                            <h4>Yan OB</h4>
                            <p>Local Guide • 80 ulasan • 582 foto</p>
                        </div>
                        <button class="more-btn">⋮</button>
                    </div>
                    <div class="testimonial-rating">
                        <div class="stars">★★★★★</div>
                        <div class="rating-text">3 minggu lalu</div>
                        <div class="rating-text baru">BARU</div>
                    </div>
                    <div class="testimonial-content">
                        Selalu ingin datang kesini karena udaranya yang sejuk dan view nya yang sangat indah. Hanya kemacetan saja pada saat masuk dan keluar yang agak lama.
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="testimonial-card group-6">
                    <div class="testimonial-header">
                        <div class="user-avatar" style="background: #2196F3;">BK</div>
                        <div class="user-info">
                            <h4>BEJO KRISTIYANTO</h4>
                            <p>Local Guide • 11 ulasan • 33 foto</p>
                        </div>
                        <button class="more-btn">⋮</button>
                    </div>
                    <div class="testimonial-rating">
                        <div class="stars">★★★★★</div>
                        <div class="rating-text">3 bulan lalu</div>
                    </div>
                    <div class="testimonial-content">
                        Tempat wisata dan camping HTM all in ya sangat murah dengan pemandangan alam yang mantap para. Very recommended.
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="testimonial-card group-7">
                    <div class="testimonial-header">
                        <div class="user-avatar" style="background: #FF5722;">WW</div>
                        <div class="user-info">
                            <h4>Wahyono Wahyu</h4>
                            <p>Local Guide • 97 ulasan • 82 foto</p>
                        </div>
                        <button class="more-btn">⋮</button>
                    </div>
                    <div class="testimonial-rating">
                        <div class="stars">★★★★★</div>
                        <div class="rating-text">seminggu lalu</div>
                        <div class="rating-text baru">BARU</div>
                    </div>
                    <div class="testimonial-content">
                        Lokasi wisata yang tenang sejuk dan view ya apik serta pemandangan air panas belitarang.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Destinasi Wisata -->
    <div class="destinasi">
        <div class="containerr">
            <div class="containerr-17 section-title">
                <div class="text-wrapperr-25">Destinasi</div>
                <div class="headingg">
                    <div class="destinasi-trip">Destinasi Wisata di Kabupaten Bandung</div>
                </div>
            </div>
            <div class="destinasi-grid">
                @foreach ($destinations as $index => $destination)
                <div class="background-borderr" data-category="{{ $destination->category ?? 'Historical' }}">
                    <div class="iconn-9"></div>
                    <div class="destinasi-image">
                        <img src="{{ $destination->imagedestination }}" alt="{{ $destination->title }}" />
                    </div>
                    <div class="text-wrapperr-27">{{ $destination->lokasi }}</div>
                    <div class="text-wrapperr-28">{{ $destination->title }}</div>
                    <div class="listt-4">
                        <div class="itemm-5">4.5(6.966)</div>
                    </div>
                    <a href="{{ route('pariwisata.detail', ['id' => $destination]) }}"
                        class="btn-telusurii">Telusuri</a>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Berita -->
        <div class="berita section">
            <div class="container">
                <div class="group">
                    <div class="background">
                        <div class="group-2">
                            <div class="container-4">
                                <div class="text-wrapper-5">Berita</div>
                                <div class="heading">
                                    <div class="text-wrapper-6">Tips & Trik Berbelanja di Kabupaten Bandung</div>
                                </div>
                            </div>

                            <div class="container-5">
                                <div class="solo-travel">MSN</div>
                                <div class="pulang-dari-wisata">
                                    Pulang dari Wisata di Kabupaten Bandung? <br />Ini Deretan Oleh-Oleh Khas
                                </div>
                                <p class="jelajahi-destinasi">
                                    Liburan ke Kabupaten Bandung nggak lengkap tanpa membawa pulang oleh-oleh khas
                                    daerah ini.
                                    Terkenal dengan lanskap alamnya yang sejuk dan penuh pesona.
                                </p>
                            </div>

                            <div class="container-6">
                                <div class="text-wrapper-7">Sokoguru</div>
                                <div class="text-wrapper-8">5 UMKM Kabupaten Bandung yang Wajib Kamu Coba!</div>
                                <p class="jelajahi-wisata">
                                    Kabupaten Bandung bukan hanya terkenal dengan keindahan alamnya.
                                </p>
                            </div>

                            <div class="container-7">
                                <div class="detik-com">Bandung Bisnis</div>
                                <div class="text-wrapper-8">7000 Produk UMKM di Kabupaten Bandung</div>
                                <p class="jelajahi-wisata">
                                    Pemerintah Kabupaten Bandung mendorong percepatan ekonomi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Welcome Section -->
    <section class="welcome-section">
            <div class="since-text">Since 2025</div>
            <div class="department-text">Dinas Kebudayaan dan Pariwisata Kabupaten Bandung</div>

            <h2 class="welcome-title">
                <span>WILUJENG</span>
                <span>SUMPING!</span>
            </h2>

            <p class="welcome-quote">
                "Dan Bandung bagiku bukan cuma masalah geografis, lebih jauh dari itu melibatkan perasaan, yang bersamaku
                ketika sunyi" -Pidi Baiq
            </p>
        </section>

      <!-- Versi yang sudah diperbaiki dan konsisten -->
<div class="wadah">
    <!-- Background Elements -->
    <div class="airplane airplane-1">✈</div>
    <div class="airplane airplane-2">✈</div>
    <div class="airplane airplane-3">✈</div>
    <div class="airplane airplane-4">✈</div>

    <!-- Dashed Flight Paths -->
    <div class="flight-path path-1"></div>
    <div class="flight-path path-2"></div>
    <div class="flight-path path-3"></div>
    <div class="flight-path path-4"></div>

    <!-- Globe Section -->
    <div class="globe-section">
        <div class="globe">
            <div class="continents">
                <div class="continent north-america"></div>
                <div class="continent south-america"></div>
                <div class="continent europe"></div>
                <div class="continent africa"></div>
                <div class="continent asia"></div>
                <div class="continent australia"></div>
            </div>

            <!-- Location Pins -->
            <div class="location-pin pin-1">
                <div class="pin-icon">📍</div>
                <div class="pin-label">KABUPATEN BANDUNG</div>
            </div>

            <div class="location-pin pin-2">
                <div class="pin-icon">📍</div>
                <div class="pin-label">UMKM</div>
            </div>

            <div class="location-pin pin-3">
                <div class="pin-icon">📍</div>
                <div class="pin-label">PARIWISATA</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h1 class="title">Login Untuk Agar<br>Tidak Ketinggalan Berita</h1>
        <p class="subtitle">Sudah siap menjelajahi keindahan Bandung dan mendukung produk lokal? Ayo masuk dan mulai petualanganmu!</p>
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