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
    <title>Member</title>

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


</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @foreach( $mem as $data )
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ url("/member/$data->id_peg") }}">
                    <img src="{{ asset('backend/dashboard/images/icon/dashboard.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{ url("/member/$data->id_peg") }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
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
                                            <img src="{{ asset('backend/dashboard/images/icon/profile.png') }}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ $data->nama_peg }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                  <img src="{{ asset('backend/dashboard/images/icon/profile.png') }}" alt="John Doe" />
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        {{ $data->nama_peg }}
                                                    </h5>
                                                    <span class="email">{{ $data->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ url("/member/$data->id_peg/update") }}">
                                                    <i class="zmdi zmdi-settings"></i>Edit Profile</a>
                                                <a href="{{ url('/admin') }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->


            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard Overview</h2>
                                </div>
                            </div>
                        </div>
                        @if (session('status'))
                        <div class="alert alert-success">
                          {{ session('status') }}
                        </div>
                        @endif
                        <div class="row m-t-25">
                          <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-40">
                              <table class="table table-borderless table-data3 table-earning">
                                <thead>
                                  <tr>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Paket</th>
                                    <th>Harga</th>
                                    <th>Tim</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach( $pos as $job )
                                  <tr>
                                    <td>{{ $job->nama_cus }}</td>
                                    <td>{{ $job->tanggal }}</td>
                                    <td>{{ $job->nama_paket }}</td>
                                    <td>{{ $job->harga_paket }}</td>
                                    <td class="{{ $job->tim }}">{{ $job->tim }}</td>
                                    <td class="berhasil">{{ $job->status }}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
