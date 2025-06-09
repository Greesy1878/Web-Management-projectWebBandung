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
                <a href="{{ url('/#') }}" class="text-wrapper-36">Login</a>
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

<style>
    .header a, .header .text-wrapper-34, .header .text-wrapper-36, .header .text-wrapper-37 {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }
    .text-wrapper-37 {
            background: linear-gradient(135deg, #26A59E);
            color: white !important;
            padding: 0.7rem 1.5rem;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
        }
    .header a:hover, .header .text-wrapper-34:hover, .header .text-wrapper-36:hover {
            background: #3D5C73;
            color: white;
            transform: translateY(-2px);
        }
    
    .header a, .header .text-wrapper-34, .header .text-wrapper-36 {
                padding: 0.3rem 0.8rem;
                font-size: 0.9rem;
            }
    .item-5 {
            background: #fef3c7;
            color: #d97706;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }
    /* Header */
        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        .header .list-5 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header .list-5 > div {
            display: flex;
            gap: 2rem;
        }

        .header a, .header .text-wrapper-34, .header .text-wrapper-36, .header .text-wrapper-37 {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .header a:hover, .header .text-wrapper-34:hover, .header .text-wrapper-36:hover {
            background: #3D5C73;
            color: white;
            transform: translateY(-2px);
        }
        /* Login Section */
        .login-untuk-agar {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a1a1a;
            text-align: center;
            margin: 2rem 0 1rem;
        }
</style>