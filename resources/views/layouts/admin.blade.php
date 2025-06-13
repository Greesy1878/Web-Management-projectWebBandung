<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>


    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/fontawesome.min.css') }}">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body id="page-top">
    @include('sweetalert::alert')
    <div id="wrapper">
        <ul class="navbar-nav sidebar shadow-nav sidebar-dark accordion bg-light" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-left justify-content-left" href="/admin"
                style="padding-left: 0;">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3" style="text-align: left; color: #109CF1 !important;">
                    Dashboard
                </div>
            </a>


            <li class="nav-item active">
                <a class="nav-link" href="/admin" style="color: #192A3E !important;">
                    <i class="fa-solid fa-border-all" style="color: #C2CFE0 !important;"></i>
                    <span>Pariwisata</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/admin/umkm" style="color: #192A3E !important;">
                    <i class="fa-solid fa-border-all" style="color: #C2CFE0 !important;"></i>
                    <span>UMKM</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/sesi" method= "POST" style="color: #192A3E !important;">
                    <i class="fa-solid fa-border-all" style="color: #C2CFE0 !important;"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>

        <div id="content-wrapper" class=" bg-white">
            <div id="content">
                @yield('content')
            </div>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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


    <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
