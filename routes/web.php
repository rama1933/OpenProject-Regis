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
Route::get('/masuk', 'Otentikasi\OtentikasiController@index')->name('masuk');
Route::post('/masuk', 'Otentikasi\OtentikasiController@login')->name('masuk');

Route::group(['middleware' => 'auth'], function () {
    Route::get('pendaftaran', 'PendaftaranController@index')->name('pendaftaran');
    Route::get('pendaftaran_tambah', 'PendaftaranController@index_tambah')->name('pendaftaran_tambah');
    Route::get('pendaftaran_edit/{id}', 'PendaftaranController@index_edit')->name('pendaftaran_edit');
    Route::any('pendaftaran_store', 'PendaftaranController@store')->name('pendaftaran_store');
    Route::any('pendaftaran_update', 'PendaftaranController@update')->name('pendaftaran_update');
    Route::get('pendaftaran_hapus/{id}', 'PendaftaranController@hapus')->name('pendaftaran_hapus');
    Route::any('pendaftaran_pdf', 'PendaftaranController@pdf')->name('pendaftaran_pdf');


    Route::get('user', 'user\UserController@index')->name('user');
    Route::get('user_tambah', 'user\UserController@index_tambah')->name('user_tambah');
    Route::get('user_edit/{id}', 'user\UserController@index_edit')->name('user_edit');
    Route::any('user_store', 'user\UserController@store')->name('user_store');
    Route::any('user_update', 'user\UserController@update')->name('user_update');
    Route::get('user_hapus/{id}', 'user\UserController@hapus')->name('user_hapus');


    Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
});
