<!DOCTYPE html>
<html>

<head>
    <title>Laporan Inovasi Daerah</title>
</head>
<style>
    /* Create two equal columns that floats next to each other */
    .column {
        float: left;
    }

    .left {
        width: 10%;
    }

    .right {
        width: 90%;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        clear: both;
    }

    table,
    th,
    td {
        border: 1px solid;
        border-collapse: collapse;
    }

    header {
        position: fixed;
        top: -30px;
        left: 0px;
        right: 0px;
    }

    footer {
        position: fixed;
        bottom: -10px;
        left: 0px;
        right: 0px;
    }
</style>

<body>
    <header>
        <hr>
    </header>
    <footer>
        <hr>
    </footer>
    <h3 style="text-align: center;">DATA PENDAFTARAN BALIK NAMA</h3>
    <table style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nopol</th>
                <th>No rangka</th>
                <th>No mesin</th>
                <th>Merk</th>
                <th>Tahun Pembuatan</th>
                <th>Tanggal Pengajuan</th>
                {{-- <th>KTP</th>
                <th>Pajak</th>
                <th>Stnk</th>
                <th>Bpkb</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $data->nopol }}</td>
                <td>{{ $data->no_rangka }}</td>
                <td>{{ $data->no_mesin }}</td>
                <td>{{ $data->merk }}</td>
                <td>{{ $data->tahun }}</td>
                <td>{{ date('d-m-Y',strtotime($data->tanggal)) }}</td>
                {{-- <td>
                    <a href="{{ url('') }}/storage/{{ $pendaftaran->ktp }}" target="_blank"
                        class="btn btn-sm btn-primary edit">
                        <i class="fa fa-download">
                        </i>
                    </a>
                </td>
                <td>
                    <a href="{{ url('') }}/storage/{{ $pendaftaran->pajak }}" target="_blank"
                        class="btn btn-sm btn-primary edit">
                        <i class="fa fa-download">
                        </i>
                    </a>
                </td>
                <td>
                    <a href="{{ url('') }}/storage/{{ $pendaftaran->stnk }}" target="_blank"
                        class="btn btn-sm btn-primary edit">
                        <i class="fa fa-download">
                        </i>
                    </a>
                </td>
                <td>
                    <a href="{{ url('') }}/storage/{{ $pendaftaran->bpkb }}" target="_blank"
                        class="btn btn-sm btn-primary edit">
                        <i class="fa fa-download">
                        </i>
                    </a>
                </td>
                <td> <a href="{{ route('pendaftaran_edit',$pendaftaran->id) }}" class="btn btn-sm btn-primary my-2"> <i
                            class="fa fa-pen">
                        </i></a>
                    <a href="{{ route('pendaftaran_hapus',$pendaftaran->id) }}" class="btn btn-sm btn-danger"><i
                            class="fa fa-trash" onclick="return confirm('Hapus data {{  $pendaftaran->nama  }} ?')">
                        </i></a>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
