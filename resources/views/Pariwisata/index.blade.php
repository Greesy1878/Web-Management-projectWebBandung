<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="pariwisata/globalss.css" />
    <link rel="stylesheet" href="pariwisata/stylee.css" />
    <link rel="stylesheet" href="pariwisata/styleguidee.css" />
    <title>Sagala Bandung - Portal Wisata & UMKM</title>
</head>

<body>
    <div class="UMKM-user">
        <div class="welcoming-dashboard-wrapper">
            <div class="welcoming-dashboard">
                <!-- Footer -->
                <div class="footer">
                    <div class="horizontal-border">
                        <div class="container">
                            <p class="hello-we-are-lift">
                                Halo, kami adalah Lift Media. Tujuan kami adalah<br />menerjemahkan efek positif
                                dari<br />revolusi digital
                            </p>
                            <div class="list">
                                <div class="element">
                                    <img class="icon" src="img/icon-3.svg" alt="Icon Media" />
                                </div>
                                <div class="icon-wrapper">
                                    <img class="icon" src="img/icon-14.svg" alt="Icon Sosial" />
                                </div>
                                <div class="img-wrapper">
                                    <img class="icon" src="img/icon-21.svg" alt="Icon Wisata" />
                                </div>
                                <div class="div">
                                    <img class="icon" src="img/icon-18.svg" alt="Icon UMKM" />
                                </div>
                            </div>
                            <div class="heading-about">Sagala Bandung</div>
                        </div>
                        <div class="container-2">
                            <div class="heading-about">Tentang Kami</div>
                            <div class="list-2">
                                <div class="div-wrapper">
                                    <div class="text-wrapper">Profil</div>
                                </div>
                                <div class="element-2">
                                    <div class="text-wrapper-2">Layanan</div>
                                </div>
                                <div class="element-3">
                                    <div class="text-wrapper-3">Kebijakan Privasi</div>
                                </div>
                                <div class="terms-conditions-wrapper">
                                    <div class="terms-conditions">Syarat & Ketentuan</div>
                                </div>
                            </div>
                        </div>
                        <div class="container-3">
                            <div class="heading-contact">Kontak</div>
                            <div class="list-3">
                                <div class="element-4">
                                    <img class="icon" src="img/icon-8.svg" alt="Telepon" />
                                    <div class="text-wrapper-4">+6282121090209</div>
                                </div>
                                <div class="element-5">
                                    <img class="icon" src="img/icon-17.svg" alt="Email" />
                                    <div class="text-wrapper-4">sagalabandung@gmail.com</div>
                                </div>
                                <div class="element-6">
                                    <img class="icon" src="img/icon-10.svg" alt="Lokasi" />
                                    <div class="text-wrapper-4">
                                        PBB I49, BANDUNG, INDONESIA
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="p">© 2024 SagalaBandung. Hak cipta dilindungi</p>
                </div>

                <!-- Area Konten Utama -->
                <div id="content-area">
                    <!-- Konten akan dimuat dinamis di sini -->
                </div>

                <!-- Bagian Branding -->
                <div class="SAGALA-BANDUNG">
                    <div class="page-awal">
                        <p class="text-wrapper-31">
                            Sejak dahulu Bandung dikenal sebagai Paris Van Java dan Kota
                            Kembang, Bandung dijuluki The Most European City in The East
                            Indies, Bandung Excelsior, Intelectuele Centrum Van Indie,
                            Europe in The Tropen, Kota Permai, Kota Pendidikan, Kota Kreatif
                            hingga Kota Kuliner.
                        </p>
                        <div class="text-wrapper-32">BANDUNG</div>
                        <div class="text-wrapper-33">sagala</div>
                    </div>
                </div>

                <!-- Navigasi Header -->
                <header class="header">
                    <div class="list-5">
                        <div class="item-6">
                            <div class="element-16">
                                <button onclick="muatHalaman('dashboard')" class="nav-button active"
                                    id="nav-dashboard">Beranda</button>
                            </div>
                        </div>
                        <div class="item-7">
                            <div class="element-16">
                                <button onclick="muatHalaman('pariwisata')" class="nav-button"
                                    id="nav-pariwisata">Pariwisata</button>
                            </div>
                        </div>
                        <div class="item-wrapper">
                            <div class="item-8">
                                <div class="element-16">
                                    <button onclick="muatHalaman('umkm')" class="nav-button" id="nav-umkm">UMKM</button>
                                </div>
                            </div>
                        </div>
                        <div class="element-17">
                            <button class="text-wrapper-37">Masuk</button>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk memuat halaman berbeda
        function muatHalaman(halaman) {
            const areaKonten = document.getElementById('content-area');

            // Reset semua tombol navigasi
            document.querySelectorAll('.nav-button').forEach(button => {
                button.classList.remove('active');
            });

            // Aktifkan tombol navigasi yang dipilih
            document.getElementById(`nav-${halaman}`).classList.add('active');

            // Kosongkan konten saat ini
            areaKonten.innerHTML = '';

            // Muat konten sesuai halaman yang dipilih
            if (halaman === 'dashboard') {
                areaKonten.innerHTML = `
                    <!-- Konten Dashboard -->
                    <div class="berita">
                        <div class="overlap">
                            <div class="group">
                                <div class="background">
                                    <div class="group-2">
                                        <div class="container-4">
                                            <div class="text-wrapper-5">Berita</div>
                                            <div class="heading">
                                                <p class="text-wrapper-6">
                                                    Tips & Trik Berbelanja di Kabupaten Bandung
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Isi berita lainnya... -->
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <div class="title">
                                    <div class="since">SEJAK 2025</div>
                                    <p class="text-wrapper-12">
                                        Dinas Kebudayaan dan Pariwisata Kota Bandung
                                    </p>
                                </div>
                                <div class="frame-4">
                                    <p class="wilujeng-SUMPING">
                                        <span class="span">WILUJENG<br /></span>
                                        <span class="text-wrapper-13">SUMPING!</span>
                                    </p>
                                    <p class="text-wrapper-14">
                                        "Dan Bandung bagiku bukan cuma masalah geografis, lebih jauh dari itu melibatkan perasaan, yang bersamaku ketika sunyi" -Pidi Baiq
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destinasi-carousel">
                        <!-- Konten carousel destinasi... -->
                    </div>
                    <div class="rekomendasi">
                        <!-- Konten rekomendasi... -->
                    </div>
                `;
            }
            else if (halaman === 'pariwisata') {
                areaKonten.innerHTML = `
                    <!-- Konten Pariwisata -->
                    <div class="pariwisata-content">
                        <div class="container-15">
                            <div class="text-wrapper-23">Destinasi</div>
                            <div class="heading">
                                <p class="text-wrapper-6">
                                    Destinasi Wisata di Kabupaten Bandung
                                </p>
                            </div>
                        </div>
                        <div class="destinasi-carousel">
                            <!-- Daftar lengkap destinasi wisata... -->
                        </div>
                        <div class="testimoni">
                            <div class="overlap-2">
                                <div class="paragraph">
                                    <div class="overlap-group-6">
                                        <div class="text-wrapper-24">Testimoni</div>
                                        <div class="heading-what-our">Apa Kata Pengunjung?</div>
                                    </div>
                                </div>
                                <div class="container-16">
                                    <div class="group-5"></div>
                                    <div class="group-6"></div>
                                    <div class="group-7"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }
            else if (halaman === 'umkm') {
                areaKonten.innerHTML = `
                    <!-- Konten UMKM -->
                    <div class="umkm-content">
                        <div class="container-17">
                            <div class="text-wrapper-25">Rekomendasi</div>
                            <div class="heading">
                                <div class="rekomendasi-trip">
                                    Rekomendasi UMKM Kabupaten Bandung
                                </div>
                            </div>
                        </div>
                        <div class="rekomendasi">
                            <!-- Daftar lengkap UMKM... -->
                        </div>
                        <div class="berita">
                            <!-- Berita terkait UMKM... -->
                        </div>
                    </div>
                `;
            }

            // Scroll ke atas setelah memuat halaman
            window.scrollTo(0, 0);
        }

        // Muat dashboard secara default saat halaman dibuka
        window.onload = function () {
            muatHalaman('dashboard');
        };
    </script>

    <style>
        /* Gaya tambahan untuk navigasi */
        .nav-button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: #333;
            padding: 8px 16px;
            transition: all 0.3s ease;
        }

        .nav-button:hover {
            color: #0066cc;
            transform: translateY(-2px);
        }

        .nav-button.active {
            color: #0066cc;
            font-weight: bold;
            border-bottom: 2px solid #0066cc;
        }
    </style>
</body>

</html>