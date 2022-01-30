<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index_user() {
        return view('dashboard/index_user');
    }
}
