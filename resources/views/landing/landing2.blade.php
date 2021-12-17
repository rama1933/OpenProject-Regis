<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Halaman Utama</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('') }}/logo/hss.png" rel="icon">

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

            <div class="row justify-content-center ">
                <div class="col-xl-9 d-flex align-items-center justify-content-between">
                    <h1 class="logo"><a href="#">UUPD SAMSAT HSS</a></h1>


                    <nav class="nav-menu d-none d-lg-block">

                    </nav><!-- .nav-menu -->

                    <a href="{{ route('masuk') }}" class="get-started-btn scrollto">Masuk</a>
                </div>
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
                            <h1>Formulir Pendafataran PKB</h1>
                        </div>

                        <div class="col-xl-12 mt-4 mb-4">
                            @if (session('message'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                    </button>
                                    {{ session('message') }}
                                </div>
                            </div>
                            @endif
                            <form action="{{ url('/landing_store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- <div class="form-group">
                                        <label for="nik" style="color: white">NIK</label>
                                        <input type="text" name="nik" class="form-control" maxlength="16"
                                            onkeypress="return hanyaAngka(event)" placeholder="NIK" data-rule="minlen:4"
                                            required />
                                    </div> --}}
                                    <div class="form-group col-lg-6">
                                        <select name="jenis" class="form-control" required>
                                            <option value="">Jenis Pendaftaran</option>
                                            <option value="0">PENDAFTARAN ULANG 1 TAHUN</option>
                                            <option value="1">PENDAFTARAN ULANG 5 TAHUN</option>
                                            <option value="2">PENDAFTARAN DUPLIKAT BAYAR PAJAK</option>
                                            <option value="3">PENDAFTARAN DUPLIKAT NON PAJAK</option>
                                            <option value="4">PENDAFTARAN RUBAH BENTUK BNN</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" name="nopol" placeholder="No Polisi "
                                            data-rule="minlen:4" required />
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Pemilik"
                                            data-rule="minlen:4" required />
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" name="no_rangka"
                                            placeholder="No Rangka " data-rule="minlen:4" required />
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" name="no_mesin" placeholder="No Mesin"
                                            data-rule="minlen:4" required />
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" name="merk" placeholder="Merk/Type "
                                            data-rule="minlen:4" required />
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" name="tahun"
                                            placeholder="Tahun Pembuatan " data-rule="minlen:4"
                                            onkeypress="return hanyaAngka(event)" maxlength="4" required />
                                    </div>


                                    <div class="form-group col-lg-12">
                                        <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat"
                                            data-rule="required" required></textarea>
                                    </div>


                                    <div class="form-group col-lg-12">
                                        <input placeholder="Tanggal Pengajuan" type="text" onfocus="(this.type='date')"
                                            onblur="(this.type='text')" class="form-control textbox-n" name="tanggal"
                                            placeholder="Subject" required />
                                    </div>



                                    <div class="btn-group col-lg-12 justify-content-center">
                                        <div class="text-center">
                                            <button class="btn btn-lg btn-success mr-3" type="submit">Kirim</button>
                                        </div>
                                        <div class="text-center"><button class="btn btn-lg btn-danger"
                                                type="reset">Batal</button></div>
                                    </div>
                                </div>
                            </form>
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
