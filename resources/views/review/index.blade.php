<?php
// Tambahkan ini setelah bagian "<!-- Rating Display -->"
?>

<!-- Form Ulasan -->
<div class="review-form">
    <h3>Tulis Ulasan</h3>
    <link rel="stylesheet" href="{{asset('css/bandungCSS/review.style.css')}}">
    <form action="submit_review.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="rating">Berapa rating yang Anda berikan?</label>
            <div class="star-rating">
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <input type="radio" id="star<?php echo $i; ?>" name="rating" value="<?php echo $i; ?>">
                    <label for="star<?php echo $i; ?>">&#9733;</label>
                <?php endfor; ?>
            </div>
        </div>

        <div class="form-group">
            <textarea name="ulasan" placeholder="Tulis Ulasan....." required></textarea>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" placeholder="Masukan Nama Lengkap Anda" required>
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
        <p class="note">Semua ulasan pada Sagala Bandung diverifikasi dalam waktu 48 jam sebelum diposting untuk memastikan keaslian dan keakuratan.</p>
    </form>
</div>


