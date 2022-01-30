@extends('layout.master')
@section('css')
<style>
    .zoom:hover {
        transform: scale(3);
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
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
                                        {{-- @if (auth()->user()->role=='admin') --}}
                                        <a href="{{ route('pendaftaran_5tahun_tambah') }}"
                                            class="btn btn-primary float-right">
                                            <i class="fa fa-plus"> Tambah</i></a>
                                        {{-- @endif --}}
                                        <h3 class="card-title">Data Pendaftaran Ulang 5 Tahun</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
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
                                        <div id="cetak_filter" class="mb-4">
                                            <p>Cetak Berdasarkan :</p>
                                            <form action="{{ url('') }}/pendaftaran_5tahun_pdf" class="form-inline">
                                                {{-- <div class="form-group mr-2">
                                                    <select name="jenis" class="form-control">
                                                        <option value="">Jenis Pendaftaran</option>
                                                        <option value="0">PENDAFTARAN ULANG 1 TAHUN</option>
                                                        <option value="1">PENDAFTARAN ULANG 5 TAHUN</option>
                                                        <option value="2">PENDAFTARAN DUPLIKAT BAYAR PAJAK</option>
                                                        <option value="3">PENDAFTARAN DUPLIKAT NON PAJAK</option>
                                                        <option value="4">PENDAFTARAN RUBAH BENTUK BNN</option>
                                                    </select>
                                                </div> --}}
                                                <div class="form-group mr-2">
                                                    <label class="mr-2" for="">Nopol</label>
                                                    <input type="text" name="nopol" class=" form-control">
                                                </div>
                                                <div class="form-group mr-2">
                                                    <label class="mr-2" for="">Tanggal</label>
                                                    <input type="date" name="tanggal" class="form-control">
                                                </div>
                                                {{-- <div class="form-group mr-2">
                                                    <label class="mr-2" for="">Tahun</label>
                                                    <input type="text" name="tahun" maxlength="4"
                                                        onkeypress="return hanyaAngka(event)" class="form-control">
                                                </div> --}}
                                                <button type="submit" class="btn btn-info">Cetak Pdf</button>
                                            </form>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="table" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nopol</th>
                                                        <th>No rangka</th>
                                                        <th>No mesin</th>
                                                        <th>Merk</th>
                                                        <th>Tahun Pembuatan</th>
                                                        <th>Tanggal Pengajuan</th>
                                                        <th>KTP</th>
                                                        <th>Pajak</th>
                                                        <th>Stnk</th>
                                                        <th>Bpkb</th>
                                                        <th>Gambar No Rangka</th>
                                                        <th>Gambar No Mesin</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pendaftaran as $pendaftaran)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{ $pendaftaran->nopol }}</td>
                                                        <td>{{ $pendaftaran->no_rangka }}</td>
                                                        <td>{{ $pendaftaran->no_mesin }}</td>
                                                        <td>{{ $pendaftaran->merk }}</td>
                                                        <td>{{ $pendaftaran->tahun }}</td>
                                                        <td>{{ date('d-m-Y',strtotime($pendaftaran->tanggal)) }}</td>
                                                        <td>
                                                            <a href="{{ url('') }}/storage/{{ $pendaftaran->ktp }}"
                                                                target="_blank" class="btn btn-sm btn-primary edit">
                                                                <i class="fa fa-download">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('') }}/storage/{{ $pendaftaran->pajak }}"
                                                                target="_blank" class="btn btn-sm btn-primary edit">
                                                                <i class="fa fa-download">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('') }}/storage/{{ $pendaftaran->stnk }}"
                                                                target="_blank" class="btn btn-sm btn-primary edit">
                                                                <i class="fa fa-download">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('') }}/storage/{{ $pendaftaran->bpkb }}"
                                                                target="_blank" class="btn btn-sm btn-primary edit">
                                                                <i class="fa fa-download">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('') }}/storage/{{ $pendaftaran->no_rangka_upload }}"
                                                                target="_blank" class="btn btn-sm btn-primary edit">
                                                                <i class="fa fa-download">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('') }}/storage/{{ $pendaftaran->no_mesin_upload }}"
                                                                target="_blank" class="btn btn-sm btn-primary edit">
                                                                <i class="fa fa-download">
                                                                </i>
                                                            </a>
                                                        </td>
                                                        <td> <a href="{{ route('pendaftaran_5tahun_edit',$pendaftaran->id) }}"
                                                                class="btn btn-sm btn-primary my-2"> <i
                                                                    class="fa fa-pen">
                                                                </i></a>
                                                            <a href="{{ route('pendaftaran_5tahun_hapus',$pendaftaran->id) }}"
                                                                class="btn btn-sm btn-danger"><i class="fa fa-trash"
                                                                    onclick="return confirm('Hapus data {{  $pendaftaran->nama  }} ?')">
                                                                </i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
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
          "responsive": false,
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
