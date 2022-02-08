<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Halaman Utama</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('') }}/logo/prov.png" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}Knight/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}Knight/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{ asset('') }}Knight/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}Knight/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}Knight/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('') }}Knight/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}Knight/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container-fluid">

            <div class="row float-right">

                {{-- <h1 class="logo"><a href="#">SAMSAT KANDANGAN</a></h1> --}}


                <a href="{{ route('masuk_form') }}" class="get-started-btn scrollto mt-3 mb-3">Masuk</a>
                <a href="{{ route('daftar_form') }}" class="get-started-btn scrollto mt-3 mb-3 mr-3">Daftar</a>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">

                    <div class="card" style="background-color:rgba(0,0,0,0.5);">
                        <div class="card-header">
                            <h1>Selamat Datang</h1>
                            <h2>Di Aplikasi Pendaftaran Pajak Kendaraan <br> Samsat Kandangan</h2>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->





    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}Knight/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/counterup/counterup.min.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{ asset('') }}Knight/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}Knight/assets/js/main.js"></script>
    <script>
        function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
    </script>

</body>

</html>
