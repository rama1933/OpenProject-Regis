<?php

namespace App\Http\Controllers;

use App\Pendaftaran_balik;
use Illuminate\Http\Request;
use PDF;

class PendaftaranBalikController extends Controller
{
    public function index()
    {
        $data['pendaftaran'] = Pendaftaran_balik::all();
        return view('pendaftaran_balik.index', $data);
    }

    public function index_tambah()
    {

        return view('pendaftaran_balik.index_tambah');
    }

    public function index_edit(Request $request, $id)
    {
        $data['pendaftaran'] = Pendaftaran_balik::where('id', $id)->get();
        return view('pendaftaran_balik.index_edit', $data);
    }

    public function store(Request $request)
    {
        $will_insert = $request->except(['ktp','ktp_baru','kwitansi_pembelian','pajak','stnk','bpkb','no_mesin_upload','no_rangka_upload', 'tanggal', '_token']);
        $tanggal = strtotime($request->input('tanggal'));
        $will_insert['tanggal'] = date('Y-m-d', $tanggal);
        if ($request->hasFile('ktp')) {
            // $this->validate(
            //     $request,
            //     [
            //         'ktp' => 'max:2000',
            //     ],
            //     [
            //         'ktp.max' => 'Maksimal 2 Mb',
            //     ]

            // );
            $path_file = $request->file('ktp')->store(
                'ktp',
                'public'
            );

            $will_insert['ktp'] = $path_file;
        }

        if ($request->hasFile('ktp_baru')) {

            $path_file = $request->file('ktp_baru')->store(
                'ktp_baru',
                'public'
            );

            $will_insert['ktp_baru'] = $path_file;
        }

        if ($request->hasFile('kwitansi_pembelian')) {

            $path_file = $request->file('kwitansi_pembelian')->store(
                'kwitansi_pembelian',
                'public'
            );

            $will_insert['kwitansi_pembelian'] = $path_file;
        }


        if ($request->hasFile('pajak')) {

            $path_file = $request->file('pajak')->store(
                'pajak',
                'public'
            );

            $will_insert['pajak'] = $path_file;
        }

        if ($request->hasFile('stnk')) {

            $path_file = $request->file('stnk')->store(
                'stnk',
                'public'
            );

            $will_insert['stnk'] = $path_file;
        }

        if ($request->hasFile('bpkb')) {

            $path_file = $request->file('bpkb')->store(
                'bpkb',
                'public'
            );

            $will_insert['bpkb'] = $path_file;
        }

            if ($request->hasFile('no_rangka_upload')) {

            $path_file = $request->file('no_rangka_upload')->store(
                'no_rangka_upload',
                'public'
            );

            $will_insert['no_rangka_upload'] = $path_file;
        }

          if ($request->hasFile('no_mesin_upload')) {

            $path_file = $request->file('no_mesin_upload')->store(
                'no_mesin_upload',
                'public'
            );

            $will_insert['no_mesin_upload'] = $path_file;
        }

        $pendaftaran = Pendaftaran_balik::create($will_insert);

        return redirect('pendaftaran_balik')->with('message', 'Berhasil menyimpan data');
    }

    public function update(Request $request)
    {
        $will_insert = $request->except(['ktp','ktp_baru','pajak','stnk','bpkb','no_mesin_upload','no_rangka_upload','kwitansi_pembelian', 'tanggal', '_token', '_method']);
        $tanggal = strtotime($request->input('tanggal'));
        $will_insert['tanggal'] = date('Y-m-d', $tanggal);
        if ($request->hasFile('ktp')) {
            // $this->validate(
            //     $request,
            //     [
            //         'ktp' => 'max:2000',
            //     ],
            //     [
            //         'ktp.max' => 'Maksimal 2 Mb',
            //     ]

            // );
            $path_file = $request->file('ktp')->store(
                'ktp',
                'public'
            );

            $will_insert['ktp'] = $path_file;
        }

         if ($request->hasFile('ktp_baru')) {

            $path_file = $request->file('ktp_baru')->store(
                'ktp_baru',
                'public'
            );

            $will_insert['ktp_baru'] = $path_file;
        }

        if ($request->hasFile('kwitansi_pembelian')) {

            $path_file = $request->file('kwitansi_pembelian')->store(
                'kwitansi_pembelian',
                'public'
            );

            $will_insert['kwitansi_pembelian'] = $path_file;
        }

        if ($request->hasFile('pajak')) {

            $path_file = $request->file('pajak')->store(
                'pajak',
                'public'
            );

            $will_insert['pajak'] = $path_file;
        }

        if ($request->hasFile('stnk')) {

            $path_file = $request->file('stnk')->store(
                'stnk',
                'public'
            );

            $will_insert['stnk'] = $path_file;
        }

        if ($request->hasFile('bpkb')) {

            $path_file = $request->file('bpkb')->store(
                'bpkb',
                'public'
            );
            $will_insert['bpkb'] = $path_file;
        }

        if ($request->hasFile('no_rangka_upload')) {

            $path_file = $request->file('no_rangka_upload')->store(
                'no_rangka_upload',
                'public'
            );

            $will_insert['no_rangka_upload'] = $path_file;
        }

          if ($request->hasFile('no_mesin_upload')) {

            $path_file = $request->file('no_mesin_upload')->store(
                'no_mesin_upload',
                'public'
            );

            $will_insert['no_mesin_upload'] = $path_file;
        }

        $pendaftaran = Pendaftaran_balik::where('id', $request->input('id'))->update($will_insert);
        // return response()->json(true);
        return redirect('pendaftaran_balik')->with('message', 'Berhasil menyimpan data');
    }

    public function hapus(Request $request, $id)
    {

        // hapus data
        Pendaftaran_balik::where('id', $id)->delete();

        return redirect()->back()->with('message', 'Berhasil menghapus data');
    }

    public function pdf(Request $request)
    {

        $query = Pendaftaran_balik::select(['tbl_master_pendaftaran_balik_nama.*']);

        if ($request->input('tanggal') != null) {
            $query->where('tbl_master_pendaftaran_balik_nama.tanggal', $request->input('tanggal'));
        }
        // if ($request->input('tahun') != null) {
        //     $query->whereYear('tbl_master_pendaftaran_balik_nama.tanggal', $request->input('tahun'));
        // }
        if ($request->input('nopol') != null) {
            $query->where('tbl_master_pendaftaran_balik_nama.nopol', $request->input('nopol'));
        }

        $data['data'] = $query->get();
        $pdf = PDF::loadview('pendaftaran_balik.indexpdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Pendaftaran_balik.pdf');
    }
}
