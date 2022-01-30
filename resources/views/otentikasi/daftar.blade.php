<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masuk Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('') }}/logo/hss.png" rel="icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ url('') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background: grey">
    <div class="login-box">

        <div class="card">
            <div class="card-body login-card-body">
                {{-- <p class="login-box-msg">Sign in to start your session</p> --}}
                <div class="row">
                    <div class="col-12">
                        <h1 style="text-align: center">Silahkan Login</h1>
                    </div>

                </div>
                <hr>
                <hr>

                <form method="POST" action="{{ route('daftar') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control item" name="username" id="username"
                                    placeholder="Username" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="password" class="form-control item" name="password" id="password"
                                    placeholder="Password" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control item" name="nik" id="nik" placeholder="Nik"
                                    required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control item" name="nama" id="nama" placeholder="Nama"
                                    required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control item" name="no_hp" id="no_hp" placeholder="No Hp"
                                    required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control item" name="alamat" id="alamat"
                                    placeholder="Alamat" required>
                            </div>
                        </div>

                    </div>


                    @if (session('message'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{ session('message') }}
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-lg btn-block" tabindex="4">
                            Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{ url('') }}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('') }}/dist/js/adminlte.min.js"></script>

</body>

</html>
