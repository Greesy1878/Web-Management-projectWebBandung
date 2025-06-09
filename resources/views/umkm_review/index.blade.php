<?php
// Tambahkan ini setelah bagian "<!-- Rating Display -->"
?>
<link rel="stylesheet" href="{{ asset('css/bandungCSS/review.style.css') }}">

<!-- Tampilkan ulasan -->
@foreach ($umkm_reviews as $umkm_review)
    <div class="review-item">
        <p><strong>{{ $umkm_review->name }}</strong> ({{ $umkm_review->email }}) memberi rating {{ $umkm_review->rating }}/5</p>
        <p>{{ $umkm_review->comment }}</p>
        @if($umkm_review->media_path)
            <div>
                @if(Str::endsWith($umkm_review->media_path, ['.jpg', '.jpeg', '.png']))
                    <img src="{{ asset('storage/' . $umkm_review->media_path) }}" width="200">
                @elseif(Str::endsWith($umkm_review->media_path, ['.mp4', '.avi']))
                    <video controls width="200">
                        <source src="{{ asset('storage/' . $umkm_review->media_path) }}">
                    </video>
                @endif
            </div>
        @endif
        <hr>
    </div>
@endforeach

<!-- Form Ulasan -->
<div class="review-form">
    <h3>Tulis Ulasan</h3>
    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="rating">Berapa rating yang Anda berikan?</label>
            <div class="star-rating">
                @for ($i = 1; $i <= 5; $i++)
                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}">
                    <label for="star{{ $i }}">&#9733;</label>
                @endfor
            </div>
        </div>

        <div class="form-group">
            <textarea name="comment" placeholder="Tulis Ulasan....." required></textarea>
        </div>

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" placeholder="Masukan Nama Lengkap Anda" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Masukan Email Anda" required>
        </div>

        <div class="form-group">
            <label for="media">Tambahkan Foto & Video</label><br>
            <input type="file" name="media" accept="image/*,video/*">
        </div>

        <button type="submit" class="submit-review-btn">Kirim Ulasan</button>
        <p class="note">Semua ulasan pada Sagala Bandung diverifikasi dalam waktu 48 jam sebelum diposting untuk
            memastikan keaslian dan keakuratan.</p>
    </form>
</div>