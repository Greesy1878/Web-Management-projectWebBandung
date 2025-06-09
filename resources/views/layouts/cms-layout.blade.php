<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
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

    @yield('content')
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-column">
                <h3 class="footer-heading">Sagala bandung</h3>
                <p class="footer-text">
                    Hello, we are Lift Media. Our goal is to translate the positive effects from revolutionizing
                </p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3 class="footer-heading">Tentang</h3>
                <div class="footer-links">
                    <a href="#" class="footer-link">About Us</a>
                    <a href="#" class="footer-link">Our Services</a>
                    <a href="#" class="footer-link">Privacy Policy</a>
                    <a href="#" class="footer-link">Terms & Conditions</a>
                </div>
            </div>

            <div class="footer-column">
                <h3 class="footer-heading">Kontak</h3>
                <div class="contact-list">
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fas fa-phone-alt"></i></span>
                        <a href="tel:+6282121090209" class="contact-text">+62 821 2109 0209</a>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:sagalabandung@gmail.com" class="contact-text">sagalabandung@gmail.com</a>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <span class="contact-text">PBB I49, BANDUNG, INDONESIA</span>
                    </div>
                </div>
            </div>


        </div>

        <div class="copyright">
            © 2024 SagalaBandung. All rights reserved
        </div>
    </footer>

    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>

<style>
   /* Header styling dengan animasi */
/* Header styling dengan animasi */
.header {
    background-color: #fafafa;
    padding: 10px 40px;
    display: flex;
    justify-content: center;
    border-bottom: 1px solid #eee;

    /* Animasi muncul dari atas */
    opacity: 0;
    transform: translateY(-20px);
    animation: slideFadeDown 0.6s ease forwards;
}

/* Keyframes animasi */
@keyframes slideFadeDown {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Container menu dan login */
.list-5 {
    width: 100%;
    max-width: 1200px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Navigasi kiri */
.list-5 > div:first-child {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px;
    flex: 1;
}

/* Styling link */
.text-wrapper-36 {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    font-weight: 500;
    font-family: sans-serif;
    transition: color 0.3s ease;
}

/* Hover untuk link */
.text-wrapper-36:hover {
    color: #ff7f50;
}

/* Active link style */
.item-6 .text-wrapper-36 {
    color: #ff7f50;
}

/* Login button */
.text-wrapper-37 {
    background-color: #2baaa0;
    color: white;
    padding: 8px 24px;
    border-radius: 4px;
    font-size: 14px;
    font-family: sans-serif;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    white-space: nowrap;
}

/* Hover untuk login */
.text-wrapper-37:hover {
    background-color: #239089;
    transform: scale(1.05);
}



    /* footer */
    body {
        margin: 0;
        font-family: 'Arial', sans-serif;
    }

    .footer {
        background-color: #375E75;
        color: #ffffff;
        padding: 40px 20px 20px;
        font-size: 14px;
    }

    .footer-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-column {
        flex: 1;
        min-width: 200px;
        margin-bottom: 20px;
    }

    .footer-heading {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .footer-text {
        margin-bottom: 20px;
    }

    .social-icons {
        display: flex;
        flex-direction: row;
        /* pastikan ini row, bukan column */
        gap: 10px;
        margin-top: 10px;
    }

    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        background-color: transparent;
        color: #ffffff;
        border: 1px solid #ffffff;
        border-radius: 50%;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
    }

    .social-icon i {
        font-size: 14px;
    }

    .social-icon:hover {
        background-color: #ffffff;
        color: #375E75;
    }

    .social-icon:hover {
        background-color: #ffffff;
        color: #375E75;
    }

    .footer-links {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .footer-link {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-link:hover {
        color: #cccccc;
    }

    .contact-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #ffffff;
    }

    .contact-icon {
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffffff22;
        border-radius: 50%;
        color: #ffffff;
        font-size: 14px;
    }

    .contact-text {
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s;
    }

    .contact-text:hover {
        color: #cccccc;
    }


    .copyright {
        text-align: center;
        margin-top: 20px;
        padding-top: 20px;
        font-size: 12px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }
</style>