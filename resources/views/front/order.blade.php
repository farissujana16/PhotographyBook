<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Order</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">

    <link rel="stylesheet" href="book/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="book/css/animate.css">

    <link rel="stylesheet" href="book/css/owl.carousel.min.css">
    <link rel="stylesheet" href="book/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="book/css/magnific-popup.css">

    <link rel="stylesheet" href="book/css/aos.css">

    <link rel="stylesheet" href="book/css/ionicons.min.css">

    <link rel="stylesheet" href="book/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="book/css/jquery.timepicker.css">


    <link rel="stylesheet" href="book/css/flaticon.css">
    <link rel="stylesheet" href="book/css/icomoon.css">
    <link rel="stylesheet" href="book/css/style.css">
  </head>
  <body>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('book/images/bg-1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Make Reservation</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row d-flex">
          <div class="col-md-5 ftco-animate img img-2" style="background-image: url(book/images/p-1.jpg);"></div>
          <div class="col-md-7 ftco-animate makereservation p-4 p-md-5">
          	<div class="heading-section ftco-animate mb-5">
	          	<span class="subheading">Book a Date</span>
	            <h2 class="mb-4">Make Reservation</h2>
	          </div>

            <form action="{{ url('/') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">No Telephon</label>
                    <input type="text" class="form-control" placeholder="No Telephon" name="telp">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Lokasi</label>
                    <input type="text" class="form-control" placeholder="Lokasi Acara" name="lokasi">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="text" class="form-control" id="book_date" placeholder="Tanggal Acara" name="tanggal">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Pesan</label>
                    <input type="text" class="form-control" placeholder="Pesan" name="pesan">
                  </div>
                </div>

                <input type="hidden" name="id" value="{{ $id }}">
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
			</div>
		</section>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="book/js/jquery.min.js"></script>
  <script src="book/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="book/js/popper.min.js"></script>
  <script src="book/js/bootstrap.min.js"></script>
  <script src="book/js/jquery.easing.1.3.js"></script>
  <script src="book/js/jquery.waypoints.min.js"></script>
  <script src="book/js/jquery.stellar.min.js"></script>
  <script src="book/js/owl.carousel.min.js"></script>
  <script src="book/js/jquery.magnific-popup.min.js"></script>
  <script src="book/js/aos.js"></script>
  <script src="book/js/jquery.animateNumber.min.js"></script>
  <script src="book/js/bootstrap-datepicker.js"></script>
  <script src="book/js/jquery.timepicker.min.js"></script>
  <script src="book/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="book/js/google-map.js"></script>
  <script src="book/js/main.js"></script>

  </body>
</html>
