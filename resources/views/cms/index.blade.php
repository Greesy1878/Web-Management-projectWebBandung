@extends('layouts.cms-layout')

@section('content')
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

<!-- Tourism Section -->
<section class="section">
    <div class="section-wrapper">

        <!-- Kiri: Teks -->
        <div class="text-content">
            <div class="section-title">Pariwisata</div>
            <h2 class="section-heading">Pariwisata Kabupaten Bandung</h2>
            <p class="section-description">
                Bandung tak hanya dikenal sebagai Kota Kembang, dengan banyaknya pesona yang dimiliki Bandung seakan
                memiliki magnet tersendiri yang membuat wisatawan tak pernah bosan datang ke Bandung. Bandung berhasil
                masuk jajaran World Trending Destinations 2024 versi Tripadvisor kategori "Best of the Best Destinations
                Travelers Choice".
            </p>

            <button class="explore-btn">Telusuri</button>

            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">80+</div>
                    <div class="stat-label">Jumlah Wisata</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">100+</div>
                    <div class="stat-label">Acara Wisata</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">20.000+</div>
                    <div class="stat-label">Pengunjung Per Tahun </div>
                </div>
            </div>
        </div>

        <!-- Kanan: Gambar -->
        <div class="image-container">
            <div class="image-wrapper">
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="{{ asset('img/bandung_img/pariwisata1.png') }}" alt="Pariwisata Bandung 1">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/pariwisata2.png') }}" alt="Pariwisata Bandung 2">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/pariwisata3.png') }}" alt="Pariwisata Bandung 3">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/pariwisata4.png') }}" alt="Pariwisata Bandung 4">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/pariwisata5.png') }}" alt="Pariwisata Bandung 5">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/pariwisata6.png') }}" alt="Pariwisata Bandung 6">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/pariwisata7.png') }}" alt="Pariwisata Bandung 7">
                    </div>
                </div>
            </div>
        </div>

        <script>
            let currentSlideIndex = 0;
            const slides = document.querySelectorAll('.slide');
            const slideDelay = 3000; // 3 detik per slide

            function showSlide(index) {
                // Sembunyikan semua slides
                slides.forEach(slide => slide.classList.remove('active'));

                // Tampilkan slide yang dipilih
                slides[index].classList.add('active');
            }

            function nextSlide() {
                currentSlideIndex = (currentSlideIndex + 1) % slides.length;
                showSlide(currentSlideIndex);
            }

            // Mulai slideshow otomatis
            function startSlideshow() {
                setInterval(nextSlide, slideDelay);
            }

            // Mulai slideshow saat halaman dimuat
            document.addEventListener('DOMContentLoaded', startSlideshow);
        </script>

    </div>
</section>


<!-- UMKM Section -->
<section class="umkm-section">
    <div class="umkm-wrapper">
        <!-- Kiri: Gambar dan Judul -->
        <div class="umkm-left">
            <div class="umkm-label">UMKM</div>
            <h2 class="umkm-title">Usaha Mikro Kecil<br>Menengah Kabupaten Bandung</h2>
            <div class="umkm-image">
                <div class="slideshow-container">
                    <div class="slide active">
                        <img src="{{ asset('img/bandung_img/umkm1.png') }}" alt="UMKM Bandung 1">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/umkm2.png') }}" alt="UMKM Bandung 2">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/umkm3.png') }}" alt="UMKM Bandung 3">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/umkm4.png') }}" alt="UMKM Bandung 4">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/umkm5.png') }}" alt="UMKM Bandung 5">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/umkm6.png') }}" alt="UMKM Bandung 6">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/bandung_img/umkm7.png') }}" alt="UMKM Bandung 7">
                    </div>
                </div>
            </div>
        </div>

        <!-- Kanan: Deskripsi, Tombol, Statistik -->
        <div class="umkm-right">
            <p class="umkm-description">
                Menurut Undang-Undang No. 20 Tahun 2008, Usaha Mikro, Kecil, dan Menengah (UMKM) adalah usaha ekonomi produktif yang berdiri sendiri, dilakukan oleh perorangan atau badan usaha, dan bukan merupakan anak perusahaan atau cabang dari usaha menengah atau usaha besar, yang memenuhi kriteria tertentu.
            </p>
            <button class="umkm-button">Telusuri ➜</button>

            <div class="umkm-stats">
                <div class="umkm-stat-item">
                    <div class="umkm-stat-number">30.000+</div>
                    <div class="umkm-stat-label">Jumlah UMKM</div>
                </div>
                <div class="umkm-stat-item">
                    <div class="umkm-stat-number">15+</div>
                    <div class="umkm-stat-label">Kategori UMKM</div>
                </div>
                <div class="umkm-stat-item">
                    <div class="umkm-stat-number">5.000+</div>
                    <div class="umkm-stat-label">UMKM Digital</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="welcome-section">
    <div class="since-text">Since 2025</div>
    <div class="department-text">Dinas Kebudayaan dan Pariwisata Kota Bandung</div>

    <h2 class="welcome-title">
        <span>WILUJENG</span>
        <span>SUMPING!</span>
    </h2>

    <p class="welcome-quote">
        "Dan Bandung bagiku bukan cuma masalah geografis, lebih jauh dari itu melibatkan perasaan, yang bersamaku
        ketika sunyi" -Pidi Baiq
    </p>
</section>

<!-- Gallery Section -->
<section class="gallery">
    <div class="gallery-item">
        <img src="{{ asset('img/bandung_img/logo-rrkr.png') }}" alt="Gallery 1">
    </div>
    <div class="gallery-item">
        <img src="{{ asset('img/bandung_img/logo-disbudpar.png') }}" alt="Gallery 2">
    </div>
    <div class="gallery-item">
        <img src="{{ asset('img/bandung_img/logo-telkom.png') }}" alt="Gallery 3">
    </div>
</section>

@endsection