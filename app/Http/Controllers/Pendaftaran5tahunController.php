<?php

namespace App\Http\Controllers;

use App\Pendaftaran_5tahun;
use Illuminate\Http\Request;
use PDF;

class Pendaftaran5tahunController extends Controller
{
    public function index()
    {
        $data['pendaftaran'] = Pendaftaran_5tahun::where('user_id',auth()->user()->id)->get();
        return view('pendaftaran_5tahun.index', $data);
    }

    public function index_tambah()
    {

        return view('pendaftaran_5tahun.index_tambah');
    }

    public function index_edit(Request $request, $id)
    {
        $data['pendaftaran'] = Pendaftaran_5tahun::where('id', $id)->get();
        return view('pendaftaran_5tahun.index_edit', $data);
    }

    public function store(Request $request)
    {
        $will_insert = $request->except(['ktp','pajak','stnk','bpkb','no_mesin_upload','no_rangka_upload', 'tanggal', '_token']);
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

        $pendaftaran = Pendaftaran_5tahun::create($will_insert);

        return redirect('pendaftaran_5tahun')->with('message', 'Berhasil menyimpan data');
    }

    public function update(Request $request)
    {
        $will_insert = $request->except(['ktp','pajak','stnk','bpkb','no_mesin_upload','no_rangka_upload', 'tanggal', '_token', '_method']);
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

        $pendaftaran = Pendaftaran_5tahun::where('id', $request->input('id'))->update($will_insert);
        // return response()->json(true);
        return redirect('pendaftaran_5tahun')->with('message', 'Berhasil menyimpan data');
    }

    public function hapus(Request $request, $id)
    {

        // hapus data
        Pendaftaran_5tahun::where('id', $id)->delete();

        return redirect()->back()->with('message', 'Berhasil menghapus data');
    }

    public function pdf(Request $request)
    {

        $query = Pendaftaran_5tahun::select(['tbl_master_pendaftaran_5_tahun.*']);

        if ($request->input('tanggal') != null) {
            $query->where('tbl_master_pendaftaran_5_tahun.tanggal', $request->input('tanggal'));
        }
        // if ($request->input('tahun') != null) {
        //     $query->whereYear('tbl_master_pendaftaran_5_tahun.tanggal', $request->input('tahun'));
        // }
        if ($request->input('nopol') != null) {
            $query->where('tbl_master_pendaftaran_5_tahun.nopol', $request->input('nopol'));
        }

        $data['data'] = $query->get();
        $pdf = PDF::loadview('pendaftaran_5tahun.indexpdf', $data)->setPaper('a4', 'landscape');
        return $pdf->download('Pendaftaran_5tahun.pdf');
    }
}
