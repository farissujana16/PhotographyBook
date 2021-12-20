<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Faris Photography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="landing/css/bootstrap.min.css">
    <link rel="stylesheet" href="landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="landing/css/animate.css">

    <link rel="stylesheet" href="landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="landing/css/magnific-popup.css">

    <link rel="stylesheet" href="landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="landing/css/jquery.timepicker.css">



    <link rel="stylesheet" href="landing/css/icomoon.css">
    <link rel="stylesheet" href="landing/css/style.css">
  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url("/") }}">Faris Photography</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-offer" class="nav-link">Booking</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ url("/admin") }}" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(landing/images/bg_3.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3">Welcome To</h1>
            <h1 class="site-heading site-animate mb-3">Faris Photography</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Come and make some beautiful memory in your life.</h2>
            @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
            @endif
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p>Faris Photography has operationed since 2020. This studio for now just accept some wedding photo session.</p>

            <p class="mb-4">This owner have working to be photographer before this studio was created. This man have working in Photography since 2018 with the someone studio. And for now he created by her self.</p>
            <p><a href="#" class="btn btn-secondary btn-lg">Learn More About Us</a></p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="landing/images/m-1.jpg" alt="Free Template by colorlib.com" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section bg-light" id="section-offer">
      <div class="container">

        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h4 class="site-sub-title">Our Services</h4>
            <h2 class="display-4">Our Services This Year</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Let's make some memory in spesial day with your couple. Whatever, this services it's compitable with your pocket.</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel site-owl">

              @foreach( $data1 as $paket )
              <div class="item">
                <div class="media d-block mb-4 text-center site-media site-animate border-0">
                  <img src="landing/images/{{ $paket->foto_paket }}" alt="Free Template by colorlib.com" class="img-fluid">
                  <div class="media-body p-md-5 p-4">
                    <h5 class="text-primary">Rp {{ $paket->harga_paket }}</h5>
                    <h5 class="mt-0 h4">{{ $paket->nama_paket }}</h5>
                    <p class="mb-4">{{ $paket->desc_paket }}</p>

                    <p class="mb-0"><a href="{{ url("/$paket->id_paket") }}" class="btn btn-primary btn-sm">Order Now!</a></p>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->


    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">This some beautiful moment in our services for you. So, booking now! Before you late.</p>
              </div>
            </div>
          </div>

          @foreach( $gambar as $foto )
          <div class="col-md-4 site-animate">
            <a href="landing/images/{{ $foto->foto }}" class="site-thumbnail image-popup">
              <img src="landing/images/{{ $foto->foto }}" alt="Free Template by colorlib.com" class="img-fluid">
            </a>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Your Experince</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Let your custion,complan, and your rating here. Or you want get some more information.</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
            <form action="" method="post">
              <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="landing/images/m-1.jpg" alt="" class="img-fluid"></p>
            <p class="text-black">
              Address: <br> Jl. Pinang Sori I no 15, Air Tawar Timur, Padang Utara, Sumatera Barat <br> Indonesia <br> <br>
              Phone: <br> 085376218165 <br> <br>
              Email: <br> <a href="mailto:farissujana1606@gmailcom">farissujana1606@gmailcom</a>
            </p>

          </div>

        </div>
      </div>
    </section>
    <!-- END section -->


    <footer class="site-footer site-bg-dark site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 site-animate">
                <h2 class="site-heading-2">About Us</h2>
                <p>Faris Photography has operationed since 2020. This studio for now just accept some wedding photo session.
                This owner have working to be photographer before this studio was created. This man have working in Photography since 2018 with the someone studio.
                And for now he created by her self. </p>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 site-animate">
                <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">The Studio</h2>
                  <ul class="list-unstyled">
                    <li><a href="#section-about" class="py-2 d-block">About Us</a></li>
                    <li><a href="#" class="py-2 d-block">Photographer</a></li>
                    <li><a href="#" class="py-2 d-block">Events</a></li>
                    <li><a href="#section-contact" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2 site-animate">
                 <div class="site-footer-widget mb-4">
                  <h2 class="site-heading-2">Useful links</h2>
                  <ul class="list-unstyled">

                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
                <li class="site-animate"><a href="twitter.com"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="facebook.com"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="instagram.com"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>




    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="bg-image" style="background-image: url(landing/images/reservation_1.jpg);"></div>
              </div>
              <div class="col-lg-12 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Reserve A Table</h1>
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">First Name</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Last Name</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                    </div>
                  </div>

                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="landing/js/jquery.min.js"></script>
    <script src="landing/js/popper.min.js"></script>
    <script src="landing/js/bootstrap.min.js"></script>
    <script src="landing/js/jquery.easing.1.3.js"></script>
    <script src="landing/js/jquery.waypoints.min.js"></script>
    <script src="landing/js/owl.carousel.min.js"></script>
    <script src="landing/js/jquery.magnific-popup.min.js"></script>

    <script src="landing/js/bootstrap-datepicker.js"></script>
    <script src="landing/js/jquery.timepicker.min.js"></script>

    <script src="landing/js/jquery.animateNumber.min.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="landing/js/google-map.js"></script>

    <script src="landing/js/main.js"></script>


  </body>
</html>
