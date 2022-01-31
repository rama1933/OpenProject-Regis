<?php

namespace App\Http\Controllers\otentikasi;

use App\User;
use App\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    //
   public function index() {

        return view('otentikasi.login');
    }

    public function index_daftar() {

        return view('otentikasi.daftar');
    }

     public function daftar(Request $request){
        // return  User::create([
        //     // 'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
       $val = [
           'username' => ['required', 'string','unique:users'],

        ];
        $input_val = validator()->make(request()->all(), $val);

        if ($input_val->fails()) {
            return redirect('daftar_form')->with('message', 'Username Sudah Terdaftar');
        }

        $val_nik = [
           'nik' => ['required', 'string','unique:tbl_master_biodata'],

        ];
        $input_val_nik = validator()->make(request()->all(), $val_nik);

        if ($input_val_nik->fails()) {
            return redirect('daftar_form')->with('message', 'NIK Sudah Terdaftar');
        }

       $trans = DB::transaction(function () use ($request) {


                $bio = DB::table('tbl_master_biodata')->insertGetId([
                        'nik' => $request->input('nik'),
                        'nama' => $request->input('nama'),
                        'no_hp' => $request->input('no_hp'),
                        'alamat' => $request->input('alamat'),
                        // "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                        // "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
                    ]);

                   DB::table('users')->insertGetId([
                        'username'=>$request['username'],
                        'password'=>Hash::make($request['password']),
                        'role'=>'user',
                        'biodata_id'=>$bio
                    ]);
                 });
        // dd($trans);

            return redirect('/masuk_form')->with('sukses', 'Berhasil Mendaftar Akun');
    }

    public function login(Request $request) {

        // $data = User::where('email',$request->email)->firstOrFail();
        // if ($data) {
        //     if (Hash::check($request->password,$data->password)) {
        //         session(['berhasil_login'=>true]);
        //         return redirect('/dashboard');
        //     }
        // }
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (auth()->user()->role == 'admin') {
            return redirect()->route('dashboard_admin');
        }else{
            return redirect('dashboard_user');
        }

        }
        return redirect('/masuk_form')->with('message','Username atau Password Salah');
    }

    public function logout(Request $request) {
        // $request->session()->flush();
        Auth::logout();
        return redirect('/');
        }
}
