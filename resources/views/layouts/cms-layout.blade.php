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
                <a href="{{ url('/sesi') }}" class="text-wrapper-36">login</a>
            </div>
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

