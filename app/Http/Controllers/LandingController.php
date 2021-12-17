<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;
use App\Tamu;
use File;

class LandingController extends Controller
{
    //
    public function index() {
        return view('landing/landing2');
    }

    public function store(Request $request)
    {
           $will_insert = $request->except(['_token']);


             $tamu = Pendaftaran::create($will_insert);

             return redirect()->back()->with('message','Berhasil menyimpan data');
    }

}
