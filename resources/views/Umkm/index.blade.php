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
                        <a href="{{ url('/') }}" class="text-wrapper-36">Home</a>
                    </div>
                    <div class="item-7">
                        <a href="{{ url('/pariwisata') }}" class="text-wrapper-36">Pariwisata</a>
                    </div>
                    <div class="item-8">
                        <a href="{{ url('/umkm') }}" class="text-wrapper-36">UMKM</a>
                    </div>
                </div>
                <div class="text-wrapper-37">Login</div>
            </div>
        </header>

         <!-- Hero Section -->
         <!-- Tulisan tengah -->
        <div class="awalll">
            <!-- Tulisan tengah -->
            <div class="page-awal">
                <div class="text-wrapper-33">sagala</div>
                <div class="text-wrapper-32">BANDUNG</div>
            </div>
                <!-- Gambar angklung -->
        <img src="/img/bandung_img/angklung.png" alt="Angklung" class="angklung-icon">

        <!-- Deskripsi di kanan -->
                <p class="text-wrapper-31">
                    Sejak dahulu Bandung dikenal sebagai Paris Van Java dan Kota Kembang,
                    Bandung pun dijuluki The Most European City in The East Indies, Bandung Excelsior,
                    Intelectuele Centrum Van Indie, Europe in The Tropen, Kota Permai, Kota Pendidkan,
                    Kota Kreatif hingga Kota Kuliner.
                </p>
            </div>
        </div>

        <!-- Rekomendasi UMKM -->
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
                    <div class="text-wrapper-27">{{ $umkmdestination->lokasi }}</div>
                    <div class="text-wrapper-28">{{ $umkmdestination->title }}</div>
                    <div class="list-4">
                        <div class="item-5">4.5(6.966)</div>
                    </div>
                    <a href="{{ route('pariwisata.detail', ['id' => $umkmdestination]) }}" class="btn-telusuri">Telusuri</a>
                </div>
            @endforeach
        </div>

                <div class="element-15">
                    <a href="#" class="text-wrapper-30">Contact Us</a>
                </div>
            </div>
        </div>

        <!-- Destinasi Wisata -->
        <div class="section">
            <div class="container">
                <div class="container-15 section-title">
                    <div class="text-wrapper-23">Destinasi</div>
                    <div class="heading">
                        <div class="text-wrapper-6">Destinasi Wisata di Kabupaten Bandung</div>
                    </div>
                </div>

                <div class="destinasi-carousel">
                    <div class="group-4">
                        <div class="destinasi">
                            <div class="background-border">
                                <div class="icon-9"></div>
                                <div class="text-wrapper-17">Culinary</div>
                                <div class="text-wrapper-28">Roti Unyil & Kue Okeke 2</div>
                                <div class="list-4">
                                    <div class="item-5">5.0</div>
                                </div>
                            </div>

                            <div class="background-border">
                                <div class="icon-9"></div>
                                <div class="text-wrapper-19">Fashion</div>
                                <div class="text-wrapper-28">Batik Kina</div>
                                <div class="list-4">
                                    <div class="item-5">5.0</div>
                                </div>
                            </div>

                            <div class="background-border">
                                <div class="icon-9"></div>
                                <div class="text-wrapper-19">Culinary</div>
                                <div class="text-wrapper-28">Sambal Hejo Beledag</div>
                                <div class="list-4">
                                    <div class="item-5">5.0</div>
                                </div>
                            </div>
                        </div>

                        <div class="number-page">
                            <div class="page">‹</div>
                            <div class="page-active">
                                <div class="num">1</div>
                            </div>
                            <div class="page-2">
                                <div class="num-2">2</div>
                            </div>
                            <div class="page-2">›</div>
                        </div>
                    </div>
                </div>
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

        <!-- Testimoni -->
        <div class="testimoni section">
            <div class="container">
                <div class="paragraph">
                    <div class="text-wrapper-24">Testimoni</div>
                    <div class="heading-what-our">Apa Kata Konsumen?</div>
                </div>
                <div class="container-16">
                    <div class="group-5"></div>
                    <div class="group-6"></div>
                    <div class="group-7"></div>
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