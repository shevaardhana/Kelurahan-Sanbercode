<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layouts.frontend.default');
// });

Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/detail-berita/{slug}', 'DetailController@index')
    ->name('detail.berita');

Route::get('/admin', 'Admin\DashboardController@index')
    ->name('admin');

Route::get('/detailpegawaiprofile', 'DetailPegawaiProfileController@index')
    ->name('detail.pegawai');

Route::get('/detailpenduduk', 'DetailPendudukController@index')
    ->name('detail.penduduk');

Route::get('/organisasi', 'OrganisasiController@index')
    ->name('organisasi');

Route::resource('tags', 'Admin\TagNewsController');
Route::resource('news', 'Admin\NewsController');
Route::resource('image', 'Admin\ImageController');
Route::resource('pegawaiprofile', 'Admin\PegawaiProfileController');
Route::resource('penduduk', 'Admin\PendudukController');
Route::resource('struktur', 'Admin\struktur_organisasiController');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
