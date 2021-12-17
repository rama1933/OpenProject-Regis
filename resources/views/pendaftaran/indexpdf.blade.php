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
    <h3 style="text-align: center;">DATA PENDAFTARAN BPKB</h3>
    <table style="width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Nopol</th>
                <th>Nama Pemilik</th>
                <th>No rangka</th>
                <th>No mesin</th>
                <th>Merk / Type</th>
                <th>Tahun Pembuatan</th>
                <th>Alamat</th>
                <th>Tanggal Pengajuan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    @if ($data->jenis == 0)
                    PENDAFTARAN ULANG 1 TAHUN
                    @endif
                    @if ($data->jenis == 1)
                    PENDAFTARAN ULANG 5 TAHUN
                    @endif
                    @if ($data->jenis == 2)
                    PENDAFTARAN DUPLIKAT BAYAR PAJAK
                    @endif
                    @if ($data->jenis == 3)
                    PENDAFTARAN DUPLIKAT NON PAJAK
                    @endif
                    @if ($data->jenis == 4)
                    PENDAFTARAN RUBAH BENTUK BNN
                    @endif
                </td>
                <td>{{ $data->nopol }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->no_rangka }}</td>
                <td>{{ $data->no_mesin }}</td>
                <td>{{ $data->merk }}</td>
                <td>{{ $data->tahun }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ date('d-m-Y',strtotime($data->tanggal)) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
