<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use App\Pendaftaran_5tahun;
use App\Pendaftaran_balik;
use App\Pendaftaran_duplikat;
use App\Pendaftaran_kuasa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index_user() {
        return view('dashboard/index_user');
    }

     public function index_admin() {
        $data['pendaftaran'] = Pendaftaran::count();
        $data['pendaftaran_kuasa'] = Pendaftaran_kuasa::count();
        $data['pendaftaran_5tahun'] = Pendaftaran_5tahun::count();
        $data['pendaftaran_duplikat'] = Pendaftaran_duplikat::count();
        $data['pendaftaran_balik'] = Pendaftaran_balik::count();

        return view('dashboard/index_admin',$data);
    }
}
