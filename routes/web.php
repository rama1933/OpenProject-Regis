<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LandingController@index')->name('landing');
Route::any('landing_store', 'LandingController@store')->name('landing_store');
Route::get('/masuk_form', 'Otentikasi\OtentikasiController@index')->name('masuk_form');
Route::post('/masuk', 'Otentikasi\OtentikasiController@login')->name('masuk');
Route::get('/daftar_form', 'Otentikasi\OtentikasiController@index_daftar')->name('daftar_form');
Route::post('/daftar', 'Otentikasi\OtentikasiController@daftar')->name('daftar');

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard_user', 'DashboardController@index_user')->name('dashboard_user');
    Route::get('dashboard_admin', 'DashboardController@index_admin')->name('dashboard_admin');


    Route::get('pendaftaran', 'PendaftaranController@index')->name('pendaftaran');
    Route::get('pendaftaran_tambah', 'PendaftaranController@index_tambah')->name('pendaftaran_tambah');
    Route::get('pendaftaran_edit/{id}', 'PendaftaranController@index_edit')->name('pendaftaran_edit');
    Route::any('pendaftaran_store', 'PendaftaranController@store')->name('pendaftaran_store');
    Route::any('pendaftaran_update', 'PendaftaranController@update')->name('pendaftaran_update');
    Route::get('pendaftaran_hapus/{id}', 'PendaftaranController@hapus')->name('pendaftaran_hapus');
    Route::any('pendaftaran_pdf', 'PendaftaranController@pdf')->name('pendaftaran_pdf');

     Route::get('pendaftaran_kuasa', 'PendaftaranKuasaController@index')->name('pendaftaran_kuasa');
    Route::get('pendaftaran_kuasa_tambah', 'PendaftaranKuasaController@index_tambah')->name('pendaftaran_kuasa_tambah');
    Route::get('pendaftaran_kuasa_edit/{id}', 'PendaftaranKuasaController@index_edit')->name('pendaftaran_kuasa_edit');
    Route::any('pendaftaran_kuasa_store', 'PendaftaranKuasaController@store')->name('pendaftaran_kuasa_store');
    Route::any('pendaftaran_kuasa_update', 'PendaftaranKuasaController@update')->name('pendaftaran_kuasa_update');
    Route::get('pendaftaran_kuasa_hapus/{id}', 'PendaftaranKuasaController@hapus')->name('pendaftaran_kuasa_hapus');
    Route::any('pendaftaran_kuasa_pdf', 'PendaftaranKuasaController@pdf')->name('pendaftaran_kuasa_pdf');


    Route::get('pendaftaran_5tahun', 'Pendaftaran5tahunController@index')->name('pendaftaran_5tahun');
    Route::get('pendaftaran_5tahun_tambah', 'Pendaftaran5tahunController@index_tambah')->name('pendaftaran_5tahun_tambah');
    Route::get('pendaftaran_5tahun_edit/{id}', 'Pendaftaran5tahunController@index_edit')->name('pendaftaran_5tahun_edit');
    Route::any('pendaftaran_5tahun_store', 'Pendaftaran5tahunController@store')->name('pendaftaran_5tahun_store');
    Route::any('pendaftaran_5tahun_update', 'Pendaftaran5tahunController@update')->name('pendaftaran_5tahun_update');
    Route::get('pendaftaran_5tahun_hapus/{id}', 'Pendaftaran5tahunController@hapus')->name('pendaftaran_5tahun_hapus');
    Route::any('pendaftaran_5tahun_pdf', 'Pendaftaran5tahunController@pdf')->name('pendaftaran_5tahun_pdf');

    Route::get('pendaftaran_duplikat', 'PendaftaranDuplikatController@index')->name('pendaftaran_duplikat');
    Route::get('pendaftaran_duplikat_tambah', 'PendaftaranDuplikatController@index_tambah')->name('pendaftaran_duplikat_tambah');
    Route::get('pendaftaran_duplikat_edit/{id}', 'PendaftaranDuplikatController@index_edit')->name('pendaftaran_duplikat_edit');
    Route::any('pendaftaran_duplikat_store', 'PendaftaranDuplikatController@store')->name('pendaftaran_duplikat_store');
    Route::any('pendaftaran_duplikat_update', 'PendaftaranDuplikatController@update')->name('pendaftaran_duplikat_update');
    Route::get('pendaftaran_duplikat_hapus/{id}', 'PendaftaranDuplikatController@hapus')->name('pendaftaran_duplikat_hapus');
    Route::any('pendaftaran_duplikat_pdf', 'PendaftaranDuplikatController@pdf')->name('pendaftaran_duplikat_pdf');

       Route::get('pendaftaran_balik', 'PendaftaranBalikController@index')->name('pendaftaran_balik');
    Route::get('pendaftaran_balik_tambah', 'PendaftaranBalikController@index_tambah')->name('pendaftaran_balik_tambah');
    Route::get('pendaftaran_balik_edit/{id}', 'PendaftaranBalikController@index_edit')->name('pendaftaran_balik_edit');
    Route::any('pendaftaran_balik_store', 'PendaftaranBalikController@store')->name('pendaftaran_balik_store');
    Route::any('pendaftaran_balik_update', 'PendaftaranBalikController@update')->name('pendaftaran_balik_update');
    Route::get('pendaftaran_balik_hapus/{id}', 'PendaftaranBalikController@hapus')->name('pendaftaran_balik_hapus');
    Route::any('pendaftaran_balik_pdf', 'PendaftaranBalikController@pdf')->name('pendaftaran_balik_pdf');


     Route::get('pendaftaran_admin', 'PendaftaranAdminController@index')->name('pendaftaran_admin');
    Route::get('pendaftaran_admin_tambah', 'PendaftaranAdminController@index_tambah')->name('pendaftaran_admin_tambah');
    Route::get('pendaftaran_admin_edit/{id}', 'PendaftaranAdminController@index_edit')->name('pendaftaran_admin_edit');
    Route::any('pendaftaran_admin_store', 'PendaftaranAdminController@store')->name('pendaftaran_admin_store');
    Route::any('pendaftaran_admin_update', 'PendaftaranAdminController@update')->name('pendaftaran_admin_update');
    Route::get('pendaftaran_admin_hapus/{id}', 'PendaftaranAdminController@hapus')->name('pendaftaran_admin_hapus');
    Route::any('pendaftaran_admin_pdf', 'PendaftaranAdminController@pdf')->name('pendaftaran_admin_pdf');
    Route::any('pendaftaran_admin_status', 'PendaftaranAdminController@status')->name('pendaftaran_admin_status');

     Route::get('pendaftaran_admin_kuasa', 'PendaftaranAdminKuasaController@index')->name('pendaftaran_admin_kuasa');
    Route::get('pendaftaran_admin_kuasa_tambah', 'PendaftaranAdminKuasaController@index_tambah')->name('pendaftaran_admin_kuasa_tambah');
    Route::get('pendaftaran_admin_kuasa_edit/{id}', 'PendaftaranAdminKuasaController@index_edit')->name('pendaftaran_admin_kuasa_edit');
    Route::any('pendaftaran_admin_kuasa_store', 'PendaftaranAdminKuasaController@store')->name('pendaftaran_admin_kuasa_store');
    Route::any('pendaftaran_admin_kuasa_update', 'PendaftaranAdminKuasaController@update')->name('pendaftaran_admin_kuasa_update');
    Route::get('pendaftaran_admin_kuasa_hapus/{id}', 'PendaftaranAdminKuasaController@hapus')->name('pendaftaran_admin_kuasa_hapus');
    Route::any('pendaftaran_admin_kuasa_pdf', 'PendaftaranAdminKuasaController@pdf')->name('pendaftaran_admin_kuasa_pdf');
    Route::any('pendaftaran_admin_kuasa_status', 'PendaftaranAdminKuasaController@status')->name('pendaftaran_admin_kuasa_status');


    Route::get('pendaftaran_admin_5tahun', 'PendaftaranAdmin5tahunController@index')->name('pendaftaran_admin_5tahun');
    Route::get('pendaftaran_admin_5tahun_tambah', 'PendaftaranAdmin5tahunController@index_tambah')->name('pendaftaran_admin_5tahun_tambah');
    Route::get('pendaftaran_admin_5tahun_edit/{id}', 'PendaftaranAdmin5tahunController@index_edit')->name('pendaftaran_admin_5tahun_edit');
    Route::any('pendaftaran_admin_5tahun_store', 'PendaftaranAdmin5tahunController@store')->name('pendaftaran_admin_5tahun_store');
    Route::any('pendaftaran_admin_5tahun_update', 'PendaftaranAdmin5tahunController@update')->name('pendaftaran_admin_5tahun_update');
    Route::get('pendaftaran_admin_5tahun_hapus/{id}', 'PendaftaranAdmin5tahunController@hapus')->name('pendaftaran_admin_5tahun_hapus');
    Route::any('pendaftaran_admin_5tahun_pdf', 'PendaftaranAdmin5tahunController@pdf')->name('pendaftaran_admin_5tahun_pdf');
    Route::any('pendaftaran_admin_5tahun_status', 'PendaftaranAdmin5tahunController@status')->name('pendaftaran_admin_5tahun_status');

    Route::get('pendaftaran_admin_duplikat', 'PendaftaranAdminDuplikatController@index')->name('pendaftaran_admin_duplikat');
    Route::get('pendaftaran_admin_duplikat_tambah', 'PendaftaranAdminDuplikatController@index_tambah')->name('pendaftaran_admin_duplikat_tambah');
    Route::get('pendaftaran_admin_duplikat_edit/{id}', 'PendaftaranAdminDuplikatController@index_edit')->name('pendaftaran_admin_duplikat_edit');
    Route::any('pendaftaran_admin_duplikat_store', 'PendaftaranAdminDuplikatController@store')->name('pendaftaran_admin_duplikat_store');
    Route::any('pendaftaran_admin_duplikat_update', 'PendaftaranAdminDuplikatController@update')->name('pendaftaran_admin_duplikat_update');
    Route::get('pendaftaran_admin_duplikat_hapus/{id}', 'PendaftaranAdminDuplikatController@hapus')->name('pendaftaran_admin_duplikat_hapus');
    Route::any('pendaftaran_admin_duplikat_pdf', 'PendaftaranAdminDuplikatController@pdf')->name('pendaftaran_admin_duplikat_pdf');
    Route::any('pendaftaran_admin_duplikat_status', 'PendaftaranAdminDuplikatController@status')->name('pendaftaran_admin_duplikat_status');

       Route::get('pendaftaran_admin_balik', 'PendaftaranAdminBalikController@index')->name('pendaftaran_admin_balik');
    Route::get('pendaftaran_admin_balik_tambah', 'PendaftaranAdminBalikController@index_tambah')->name('pendaftaran_admin_balik_tambah');
    Route::get('pendaftaran_admin_balik_edit/{id}', 'PendaftaranAdminBalikController@index_edit')->name('pendaftaran_admin_balik_edit');
    Route::any('pendaftaran_admin_balik_store', 'PendaftaranAdminBalikController@store')->name('pendaftaran_admin_balik_store');
    Route::any('pendaftaran_admin_balik_update', 'PendaftaranAdminBalikController@update')->name('pendaftaran_admin_balik_update');
    Route::get('pendaftaran_admin_balik_hapus/{id}', 'PendaftaranAdminBalikController@hapus')->name('pendaftaran_admin_balik_hapus');
    Route::any('pendaftaran_admin_balik_pdf', 'PendaftaranAdminBalikController@pdf')->name('pendaftaran_admin_balik_pdf');
    Route::any('pendaftaran_admin_balik_status', 'PendaftaranAdminBalikController@status')->name('pendaftaran_admin_balik_status');


    Route::get('user', 'user\UserController@index')->name('user');
    Route::get('user_tambah', 'user\UserController@index_tambah')->name('user_tambah');
    Route::get('user_edit/{id}', 'user\UserController@index_edit')->name('user_edit');
    Route::any('user_store', 'user\UserController@store')->name('user_store');
    Route::any('user_update', 'user\UserController@update')->name('user_update');
    Route::get('user_hapus/{id}', 'user\UserController@hapus')->name('user_hapus');


    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});
