<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- CSS Assets -->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "{{ session('success') }}",
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}"
            });
        </script>
    @endif

    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar shadow-nav sidebar-dark accordion bg-light" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-left justify-content-left" href="/admin" style="padding-left: 0;">
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="fa-solid fa-border-all"></i>
                    <span>Pariwisata</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/umkm">
                    <i class="fa-solid fa-store"></i>
                    <span>UMKM</span>
                </a>
            </li>

            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link p-0" style="color: inherit;">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>

        <!-- Content -->
        <div id="content-wrapper" class="bg-white">
            <div id="content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scroll to Top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script>
        if (typeof jQuery === 'undefined') {
            document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"><\/script>');
        }
    </script>

    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        if (typeof bootstrap === 'undefined') {
            document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"><\/script>');
        }
    </script>

    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
    <script>
        if (typeof jQuery.easing === 'undefined') {
            document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"><\/script>');
        }
    </script>

    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });

            // Scroll to top button
            const scrollToTop = document.querySelector('.scroll-to-top');
            window.addEventListener('scroll', function() {
                scrollToTop.style.display = window.pageYOffset > 100 ? 'flex' : 'none';
            });
        });
    </script>
</body>
</html>
