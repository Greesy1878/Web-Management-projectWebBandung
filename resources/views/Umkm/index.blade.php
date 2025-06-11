<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Sagala Bandung - Pariwisata & UMKM</title>
    <link rel="stylesheet" href="{{ asset('css/bandungCSS/pariwisatadanumkam.style.css') }}">

</head>

<body>
    <div class="UMKM-user">
        <!-- Header -->
        <header class="header">
            <div class="list-5">
                <div>
                    <div class="item-6">
                        <a href="{{ url('/') }}" class="text-wrapper-38">Home</a>
                    </div>
                    <div class="item-7">
                        <a href="{{ url('/pariwisata') }}" class="text-wrapper-38">Pariwisata</a>
                    </div>
                    <div class="item-8">
                        <a href="{{ url('/umkm') }}" class="text-wrapper-38">UMKM</a>
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
                        <div class="rekomendasi-trip">Rekomendasi UMKM Kabupaten Bandung</div>
                    </div>
                </div>
                <div class="rekomendasi-grid">
                    @foreach ($umkmdestinations as $umkmdestination)
                        <div class="rekomendasibackground-border">
                            <button class="button">
                                <div class="text-wrapper-26">Populer</div>
                            </button>
                            <div class="icon-9"></div>
                            <div class="pull-image">
                                <img src="{{ $umkmdestination->image }}" alt="{{ $umkmdestination->title }}" />
                            </div>
                            <div class="text-wrapper-27">{{ $umkmdestination->lokasi }}</div>
                            <div class="text-wrapper-28">{{ $umkmdestination->title }}</div>
                            <div class="list-4">
                                <div class="item-5">4.5(6.966)</div>
                            </div>
                            <a href="{{ route('pariwisata.detail', ['id' => $umkmdestination]) }}"
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
                    <div class="text-wrapper-24">Testimoni taaek</div>
                    <div class="heading-what-our">Apa Kata Konsumen?</div>
                </div>
                <div class="container-16">
                    <div class="group-5"></div>
                    <div class="group-6"></div>
                    <div class="group-7"></div>
                </div>
            </div>
        </div>

        <!-- Destinasi Wisata -->
        <div class="rekomendasi section">
            <div class="container">
                <div class="container-17 section-title">
                    <div class="text-wrapper-25">Rekomendasi</div>
                    <div class="heading">
                        <div class="rekomendasi-trip">Rekomendasi UMKM Kabupaten Bandung</div>
                    </div>
                </div>
                <div class="destination-grid">
                    @foreach ($umkmdestinations as $umkmdestination)
                        <div class="background-border">
                            <button class="button">
                                <div class="text-wrapper-26">Populer</div>
                            </button>
                            <div class="icon-9"></div>
                            <div class="destination-image">
                                <img src="{{ $umkmdestination->imagedestination }}" alt="{{ $umkmdestination->title }}" />
                            </div>
                            <div class="text-wrapper-27">{{ $umkmdestination->lokasi }}</div>
                            <div class="text-wrapper-28">{{ $umkmdestination->title }}</div>
                            <div class="list-4">
                                <div class="item-5">4.5(6.966)</div>
                            </div>
                            <a href="{{ route('pariwisata.detail', ['id' => $umkmdestination]) }}"
                                class="btn-telusuri">Telusuri</a>
                        </div>
                    @endforeach
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
                                            <div class="text-wrapper-6">Tips & Trik Berbelanja di Kabupaten Bandung
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-5">
                                        <div class="solo-travel">MSN</div>
                                        <div class="pulang-dari-wisata">
                                            Pulang dari Wisata di Kabupaten Bandung? <br />Ini Deretan Oleh-Oleh Khas
                                        </div>
                                        <p class="jelajahi-destinasi">
                                            Liburan ke Kabupaten Bandung nggak lengkap tanpa membawa pulang oleh-oleh
                                            khas
                                            daerah ini.
                                            Terkenal dengan lanskap alamnya yang sejuk dan penuh pesona.
                                        </p>
                                    </div>

                                    <div class="container-6">
                                        <div class="text-wrapper-7">Sokoguru</div>
                                        <div class="text-wrapper-8">5 UMKM Kabupaten Bandung yang Wajib Kamu Coba!
                                        </div>
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

                                <div style="text-align: center; margin-top: 3rem;">
                                    <p class="login-untuk-agar">Login Untuk Agar <br />Tidak Ketinggalan Berita</p>
                                    <p class="text-wrapper-10">
                                        Sudah siap menjelajahi keindahan Bandung dan mendukung produk lokal?
                                        Ayo masuk dan mulai petualanganmu!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Footer -->
                <div class="footer">
                    <div class="container">
                        <div class="horizontal-border">
                            <div>
                                <p class="hello-we-are-lift">
                                    Hello, we are Lift Media. Our goal is to<br />translate the
                                    positive effects from<br />revolutionizing
                                </p>
                                <div class="heading-about">Sagala Bandung</div>
                            </div>

                            <div>
                                <div class="heading-about">Tentang</div>
                                <div class="list-2">
                                    <a href="#" class="text-wrapper">About Us</a>
                                    <a href="#" class="text-wrapper-2">Our Services</a>
                                    <a href="#" class="text-wrapper-3">Privacy Policy</a>
                                    <a href="#" class="terms-conditions">Terms & Conditions</a>
                                </div>
                            </div>

                            <div>
                                <div class="heading-contact">Kontak</div>
                                <div class="list-3">
                                    <div class="element-4">
                                        <span>📞</span>
                                        <div class="text-wrapper-4">+6282121090209</div>
                                    </div>
                                    <div class="element-5">
                                        <span>✉️</span>
                                        <div class="text-wrapper-4">sagalabandung@gmail.com</div>
                                    </div>
                                    <div class="element-6">
                                        <span>📍</span>
                                        <div class="text-wrapper-4">PBB I49, BANDUNG, INDONESIA</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="p">© 2024 SagalaBandung. All rights reserved</p>
                    </div>
                </div>
            </div>
</body>

</html>
