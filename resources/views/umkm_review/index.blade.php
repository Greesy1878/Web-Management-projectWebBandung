<link rel="stylesheet" href="{{ asset('css/bandungCSS/review.style.css') }}">

<!-- Flash Message -->
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul style="margin:0; padding-left:20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Tampilkan Ulasan -->
@if ($umkm->umkm_reviews && $umkm->umkm_reviews->count() > 0)
    @foreach ($umkm->umkm_reviews as $review)
        <div class="review-item">
            <p>
                <strong>{{ $review->name }}</strong> ({{ $review->email }})
                memberi rating {{ $review->rating }}/5
            </p>
            <p>{{ $review->comment }}</p>

            @if ($review->media_path)
                <div>
                    @php
                        $ext = pathinfo($review->media_path, PATHINFO_EXTENSION);
                    @endphp

                    @if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png']))
                        <img src="{{ asset('storage/' . $review->media_path) }}" width="200" alt="Review Media">
                    @elseif(in_array(strtolower($ext), ['mp4', 'avi']))
                        <video controls width="200">
                            <source src="{{ asset('storage/' . $review->media_path) }}">
                        </video>
                    @endif
                </div>
            @endif
            <hr>
        </div>
    @endforeach
@else
    <p>Belum ada ulasan untuk destinasi ini.</p>
@endif

<!-- Form Ulasan -->
<div class="review-form">
    <h3>Tulis Ulasan</h3>
    <form action="{{ route('umkm.review.store', $umkm->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="rating">Berapa rating yang Anda berikan?</label>
            <div class="star-rating">
                @for ($i = 1; $i <= 5; $i++)
                    <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}"
                        {{ old('rating') == $i ? 'checked' : '' }}>
                    <label for="star{{ $i }}">&#9733;</label>
                @endfor
            </div>
        </div>

        <div class="form-group">
            <textarea name="comment" placeholder="Tulis Ulasan....." required>{{ old('comment') }}</textarea>
        </div>

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukan Nama Lengkap Anda"
                required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email Anda" required>
        </div>

        <div class="form-group">
            <label for="media">Tambahkan Foto & Video</label><br>
            <input type="file" name="media" accept="image/*,video/*">
        </div>

        <button type="submit" class="submit-review-btn">Kirim Ulasan</button>
        <p class="note">
            Semua ulasan pada Sagala Bandung diverifikasi dalam waktu 48 jam sebelum diposting
            untuk memastikan keaslian dan keakuratan.
        </p>
    </form>
</div>
