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
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">Sagala Bandung</div>
        <div class="hamburger">
            <div class="hamburger-line"></div>
            <div class="hamburger-line"></div>
            <div class="hamburger-line"></div>
        </div>
        <nav class="nav-menu">
            <form action="{{ url('/') }}" method="GET">
                <button type="submit" class="nav-item active">Home</button>
            </form>
            <form action="{{ url('/umkm') }}" method="GET">
                <button type="submit" class="nav-item">UMKM</button>
            </form>
            <form action="{{ url('/pariwisata') }}" method="GET">
                <button type="submit" class="nav-item">Pariwisata</button>
            </form>
            <button class="login-btn" onclick="location.href='{{ url('/login') }}'">Login</button>
        </nav>
        
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
                    <div class="social-icon"></div>
                    <div class="social-icon"></div>
                    <div class="social-icon"></div>
                    <div class="social-icon"></div>
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
                <div class="footer-links">
                    <div class="contact-item">
                        <div class="contact-icon"></div>
                        <span>+6282121090209</span>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"></div>
                        <span>sagalabandung@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"></div>
                        <span>PBB I49, BANDUNG, INDONESIA</span>
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