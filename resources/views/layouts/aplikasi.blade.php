<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagala Bandung - Home & Login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

                <!-- Tombol Login hanya ditampilkan jika user belum login -->
                @guest
                <a href="{{ url('/sesi') }}" class="text-wrapper-37">Login</a>
                @endguest

                <!-- Tombol Logout hanya ditampilkan jika user sudah login -->
                @auth
                <div class="item-9">
                    <a href="{{ route('logout') }}"
                        class="text-wrapper-88"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endauth
            </div>
        </div>
    </header>

    <!-- Hero Section -->
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
                Sejak dahulu Bandung dikenal sebagai Paris Van Java dan Kota Kembang, Bandung pun dijuluki The Most European
                City in The East Indies, Bandung Excelsior, Intelectuele Centrum Van Indie, Europe in The Tropen, Kota
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

    <!-- Main Content Section -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <!-- Left Side - Image -->
                <div class="col-lg-6 col-md-12">
                    <div class="image-container">
                        <img src="/img/bandung_img/animasi.png" alt="Login Illustration" class="login-image">
                    </div>
                </div>

                <!-- Right Side - Login Form -->
                <div class="col-lg-6 col-md-12">
                    <div class="login-section">
                        <div class="login-card">
                            <h2 class="text-center">Selamat Datang</h2>
                            <p class="text-muted text-center">Silakan login untuk melanjutkan</p>

                            <form action="/sesi/login" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required autofocus>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>

                                <div class="text-center mt-3">
                                    <a href="#" class="text-decoration-none text-secondary">Lupa kata sandi?</a>
                                </div>
                                <div class="text-center mt-2">
                                    <span class="text-muted">Belum punya akun?</span>
                                    <a href="{{ url('/sesi/register') }}" class="text-decoration-none">Buat Disini</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Scripts -->
    <script src="{{asset('js/index.js')}}"></script>
    
    <!-- Hero Slideshow Script -->
    <script>
        class HeroSlideshow {
            constructor() {
                this.slides = document.querySelectorAll('.background-slide');
                this.indicators = document.querySelectorAll('.indicator');
                this.currentSlide = 0;
                this.slideInterval = null;
                this.autoPlayDuration = 4000; // 4 detik

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
                if (heroSection) {
                    heroSection.addEventListener('mouseenter', () => this.pauseAutoPlay());
                    heroSection.addEventListener('mouseleave', () => this.startAutoPlay());
                }
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

        // Tourism Section Slideshow
        let currentSlideIndex = 0;
        const tourismSlides = document.querySelectorAll('.slide');
        const slideDelay = 3000; // 3 detik per slide

        function showSlide(index) {
            // Sembunyikan semua slides
            tourismSlides.forEach(slide => slide.classList.remove('active'));

            // Tampilkan slide yang dipilih
            if (tourismSlides[index]) {
                tourismSlides[index].classList.add('active');
            }
        }

        function nextSlide() {
            currentSlideIndex = (currentSlideIndex + 1) % tourismSlides.length;
            showSlide(currentSlideIndex);
        }

        // Mulai slideshow otomatis
        function startSlideshow() {
            if (tourismSlides.length > 0) {
                setInterval(nextSlide, slideDelay);
            }
        }

        // Smooth scroll effect untuk indicators
        document.addEventListener('DOMContentLoaded', () => {
            // Inisialisasi hero slideshow
            if (document.querySelector('.hero-section')) {
                new HeroSlideshow();
            }

            // Mulai tourism slideshow
            startSlideshow();

            // Indicator hover effects
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
        });
    </script>
</body>

</html>