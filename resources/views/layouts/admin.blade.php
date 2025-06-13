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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/fontawesome.min.css') }}">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
    
<body id="page-top">
    @include('sweetalert::alert')
    
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar shadow-nav sidebar-dark accordion bg-light" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-left justify-content-left" href="/admin" style="padding-left: 0;">
                <div class="sidebar-brand-text mx-3" style="text-align: left;">
                    Dashboard
                </div>
            </a>

            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fa-solid fa-border-all"></i>
                    <span>Pariwisata</span>
                </a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="/admin/umkm">
                    <i class="fa-solid fa-border-all"></i>
                    <span>UMKM</span>
                </a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="/sesi" method="POST">
                    <i class="fa-solid fa-border-all"></i>
                    <span>Logout</span>
                </a>
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

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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

            // Mobile sidebar toggle
            const sidebar = document.querySelector('.sidebar');
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    const sidebarToggle = document.querySelector('#sidebarToggle');
                    if (!sidebar.contains(e.target) && !sidebarToggle?.contains(e.target)) {
                        sidebar.classList.remove('active');
                    }
                }
            });
        });
    </script>
</body>
</html>