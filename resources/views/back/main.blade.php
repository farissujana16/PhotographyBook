<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('backend/dashboard/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.cs') }}s" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('backend/dashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('backend/dashboard/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/select2/select2.min.cs') }}s" rel="stylesheet" media="all">
    <link href="{{ asset('backend/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('backend/dashboard/css/theme.css') }}" rel="stylesheet" media="all">
    @yield('jadwal')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="{{ url("/dashboard") }}">
                            <img src="{{ asset('backend/dashboard/images/icon/logo.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ url("/dashboard") }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url("/chart") }}">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ url("/dashboard") }}">
                    <img src="{{ asset('backend/dashboard/images/icon/dashboard.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{ url("/dashboard") }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url("/chart") }}">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="{{ url("/pegawai") }}">
                                <i class="fas fa-table"></i>Data Pegawai</a>
                        </li>
                        <li>
                            <a href="{{ url("/pesan") }}">
                                <i class="far fa-check-square"></i>Pesan</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="hidden" name="search" placeholder="Search for datas &amp; reports..." />
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('backend/dashboard/images/icon/admin.jpg') }}" alt="Admin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                  <img src="{{ asset('backend/dashboard/images/icon/admin.jpg') }}" alt="Admin" />
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        Admin
                                                    </h5>
                                                    <span class="email">faris@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ url('/admin') }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->


            @yield('konten')
            <!-- MAIN CONTENT-->

            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('backend/dashboard/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('backend/dashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('backend/dashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('backend/dashboard/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('backend/dashboard/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('backend/dashboard/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('backend/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('backend/dashboard/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/dashboard/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('backend/dashboard/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('backend/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('backend/dashboard/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/dashboard/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('backend/dashboard/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->


<script type="text/javascript">

(function ($) {
  // USE STRICT
  "use strict";

  try {
@yield('grafik')

} catch (error) {
  console.log(error);
}

})(jQuery);
</script>
