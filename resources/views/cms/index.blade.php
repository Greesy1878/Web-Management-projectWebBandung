@extends('layouts.cms-layout')

@section('content')
    <section class="hero">
        <div class="hero-subtitle">sagala</div>
        <div class="hero-title">BANDUNG</div>
        <div class="hero-description">
            Sejak dahulu Bandung dikenal sebagai Paris Van Java dan Kota Kembang, Bandung pun dijuluki The Most European
            City in The East Indies, Bandung Excelsior, Intelectuele Centrum Van Indie, Europe in The Tropen, Kota
            Permai, Kota Pendidkan, Kota Kreatif hingga Kota Kuliner.
        </div>
    </section>

    <!-- Tourism Section -->
    <section class="section">
        <div class="section-content">
            <div class="section-title">Pariwisata</div>
            <h2 class="section-heading">Pariwisata Kabupaten Bandung</h2>
            <p class="section-description">
                Bandung tak hanya dikenal sebagai Kota Kembang, dengan banyaknya pesona yang dimiliki Bandung seakan
                memiliki magnet tersendiri yang membuat wisatawan tak pernah bosan datang ke Bandung. Bandung berhasil
                masuk jajaran World Trending Destinations 2024 versi Tripadvisor kategori "Best of the Best Destinations
                Travelers Choice".
            </p>

            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">14</div>
                    <div class="stat-label">Lorem Ipsum</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">320+</div>
                    <div class="stat-label">Lorem Ipsum</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">67+</div>
                    <div class="stat-label">Lorem Ipsum</div>
                </div>
            </div>

            <button class="explore-btn">Telusuri</button>
        </div>

        <div class="image-container">
            <img src="{{ asset('img/bandungIMG/pariwisata1.jpg') }}" alt="UMKM Bandung">
        </div>
    </section>

    <!-- UMKM Section -->
    <section class="section umkm-section">
        <div class="umkm-image-container">
            <img src="{{ asset('img/bandungIMG/pariwisata1.jpg') }}" alt="UMKM Bandung">
        </div>

        <div class="section-content">
            <div class="section-title">UMKM</div>
            <h2 class="section-heading">Usaha Mikro Kecil Menengah Kabupaten Bandung</h2>
            <p class="section-description">
                Menurut Undang-Undang No. 20 Tahun 2008, Usaha Mikro, Kecil, dan Menengah (UMKM) adalah usaha ekonomi
                produktif yang berdiri sendiri, dilakukan oleh perorangan atau badan usaha, dan bukan merupakan anak
                perusahaan atau cabang dari usaha menengah atau usaha besar, yang memenuhi kriteria tertentu.
            </p>

            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">14</div>
                    <div class="stat-label">Lorem Ipsum</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">320+</div>
                    <div class="stat-label">Lorem Ipsum</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">67+</div>
                    <div class="stat-label">Lorem Ipsum</div>
                </div>
            </div>

            <button class="explore-btn">Telusuri</button>
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
            <img src="https://placehold.co/185x283" alt="Gallery 1">
        </div>
        <div class="gallery-item">
            <img src="https://placehold.co/185x283" alt="Gallery 2">
        </div>
        <div class="gallery-item">
            <img src="https://placehold.co/185x283" alt="Gallery 3">
        </div>
    </section>

@endsection