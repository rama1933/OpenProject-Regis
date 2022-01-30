@extends('layout.master')
@section('css')
<style>
    .zoom:hover {
        transform: scale(3);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }

    <style>a:link {
        color: black;
        background-color: transparent;
        text-decoration: none;
    }

    a:visited {
        color: black;
        background-color: transparent;
        text-decoration: none;
    }

    a:hover {
        color: black;
        background-color: transparent;
        text-decoration: underline;
    }

    a:active {
        color: black;
        background-color: transparent;
        text-decoration: underline;
    }
</style>
</style>
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{-- <h1 class="m-0 text-dark">Karyawan {{ $jenis }}</h1> --}}
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    {{-- <li class="breadcrumb-item"><a href="#">Data pendaftaran</a></li> --}}
                    {{-- <li class="breadcrumb-item active">Data pendaftaran</li> --}}
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Selamat Datang <b>{{ auth()->user()->username }}</b>, <br> Silahkan Pilih
                                        Pendaftaran Yang Akan Anda Lakukan
                                    </div>
                                    <!-- /.card-header -->
                                    {{-- <div class="card-body">

                                    </div> --}}
                                    <!-- /.card-body -->

                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <a href="{{ route('pendaftaran') }}">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-info elevation-1"><i
                                                        class="fas fa-book"></i></span>

                                                <div class="info-box-content">
                                                    <h3 style="color: black">Pendaftaran Ulang 1 Tahun</h3>

                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                        </a>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <a href="{{ route('pendaftaran_kuasa') }}">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-primary elevation-1"><i
                                                        class="fas fa-book"></i></span>

                                                <div class="info-box-content">
                                                    <h3 style="color: black">Pendaftaran Ulang 1 Tahun Bukan
                                                        Atas Nama Pemilik Kendaraan</h3>

                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                        </a>
                                        <!-- /.info-box -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <a href="{{ route('pendaftaran_5tahun') }}">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success elevation-1"><i
                                                        class="fas fa-book"></i></span>

                                                <div class="info-box-content">
                                                    <h3 style="color: black">Pendaftaran Ulang 5 Tahun </h3>

                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                        </a>
                                        <!-- /.info-box -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <a href="{{ route('pendaftaran_duplikat') }}">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-warning elevation-1"><i
                                                        class="fas fa-book"></i></span>

                                                <div class="info-box-content">
                                                    <h3 style="color: black">Pendaftaran Duplikat </h3>

                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                        </a>
                                        <!-- /.info-box -->
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-12">
                                        <a href="{{ route('pendaftaran_balik') }}">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-danger elevation-1"><i
                                                        class="fas fa-book"></i></span>

                                                <div class="info-box-content">
                                                    <h3 style="color: black">Pendaftaran Bea Balik Nama (BBN)
                                                    </h3>

                                                </div>
                                                <!-- /.info-box-content -->
                                            </div>
                                        </a>
                                        <!-- /.info-box -->
                                    </div>


                                    <!-- /.col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.card-body -->
            </div>
        </div>
    </div>
</section>



@endsection
@section('js')

<script>
    // let list_karyawan = [];
    const table = $("#table").DataTable({
            "language": {
        "sProcessing":    "Sedang Diproses",
        "sLengthMenu":    "Tampilkan _MENU_ Data",
        "sZeroRecords":   "Data Kosong",
        "sEmptyTable":    "Data Kosong",
        "sInfo":          "Menampilkan dari _START_ sampai _END_ data dari total _TOTAL_ data",
        "sInfoEmpty":     "Menampilkan data dari 0 hingga 0 dari total 0 data",
        "sInfoFiltered":  "(di filter dari _MAX_ data)",
        "sInfoPostFix":   "",
        "sSearch":        "Cari:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Sedang Diproses...",
        "oPaginate": {
            "sFirst":    "Pertama",
            "sLast":    "Terakhir",
            "sNext":    "Lanjut",
            "sPrevious": "Kembali"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    },
          "responsive": true,
          "autoWidth": false,
          "pageLength":10,
          "lengthMenu":[[10,25,50,100,-1],[10,25,50,100,'semua']],
          "bLengthChange":true,
          "bFilter":true,
          "bInfo":true,
          "processing":true,
            });



function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>
@endsection
