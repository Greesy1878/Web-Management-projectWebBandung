{{-- <?php
// Tambahkan ini setelah bagian "<!-- Rating Display -->"
?>
<link rel="stylesheet" href="{{ asset('css/bandungCSS/review.style.css') }}">

<!-- Tampilkan ulasan -->
@foreach ($umkmreviews as $umkmreview)
    <div class="review-item">
        <p><strong>{{ $umkmreview->name }}</strong> ({{ $umkmreview->email }}) memberi rating {{ $umkmreview->rating }}/5</p>
        <p>{{ $umkmreview->comment }}</p>
        @if($umkmreview->media_path)
            <div>
                @if(Str::endsWith($umkmreview->media_path, ['.jpg', '.jpeg', '.png']))
                    <img src="{{ asset('storage/' . $umkmreview->media_path) }}" width="200">
                @elseif(Str::endsWith($umkmreview->media_path, ['.mp4', '.avi']))
                    <video controls width="200">
                        <source src="{{ asset('storage/' . $umkmreview->media_path) }}">
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
</div> --}}