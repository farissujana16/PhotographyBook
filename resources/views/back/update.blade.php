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
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ url("/member") }}">
                    <img src="{{ asset('backend/dashboard/images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="{{ url("/member") }}">
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
                              @foreach( $baru as $data )
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('backend/dashboard/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ $data->nama_peg }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                  <img src="{{ asset('backend/dashboard/images/icon/avatar-01.jpg') }}" alt="John Doe" />
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
                          <div class="col-lg-12">
                              <div class="au-card m-b-30">
                                  <div class="au-card-inner">
                                      <h3 class="title-2 m-b-40">Tambah Pegawai</h3>
                                  </div>
                                  @foreach( $baru as $update )
                                  <form action="{{ url("/member/$update->id_peg") }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @method('patch')
                                    @csrf
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="text-input" class=" form-control-label">Nama Lengkap</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                              <input type="text" id="text-input" name="nama" placeholder="Nama Lengkap" class="form-control" value="{{ $update->nama_peg }}">
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                              <input type="text" id="text-input" name="tanggal" placeholder="Tanggal Lahir" class="form-control" value="{{ $update->tgl_lahir }}">
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="email-input" class=" form-control-label">Email</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                              <input type="text" id="email-input" name="email" placeholder="Enter Email" class="form-control" value="{{ $update->email }}">
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="password-input" class=" form-control-label">Password</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                              <input type="password" id="password-input" name="password" placeholder="Password" class="form-control" value="{{ $update->pass }}">
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="text-input" class=" form-control-label">Alamat</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                              <input type="text" id="text-input" name="alamat" placeholder="Nama Lengkap" class="form-control" value="{{ $update->alamat }}">
                                          </div>
                                      </div>
                                      <input type="hidden" name="id" value="{{ $update->id_peg }}">
                                      <div class="row form-group">
                                          <div class="col-12 col-md-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                              <i class="fa fa-check"></i> Submit
                                            </button>
                                            <a  href="{{ url("/member/$update->id_peg") }}" class="btn btn-danger btn-sm">
                                              <i class="fa fa-ban"></i> Reset
                                            </a >
                                          </div>
                                      </div>
                                  </form>
                                  @endforeach
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
