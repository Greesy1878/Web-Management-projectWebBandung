@extends('layouts.cms-layout')

@section('content')
<section class="hero-section">
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
</section>

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
              <img src="{{ asset('img/bandung_img/pariwisata1.png') }}" alt="UMKM Bandung">
          </div>
      </div>
      
</div>

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
        <img src="{{ asset('img/bandung_img/umkm1.png') }}" alt="UMKM Bandung" />
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