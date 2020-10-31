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

Route::get('/', function () {
    return view('Welcome');
});

// URL 1 //
Route::get('/about-me', function () {
    return 'Hallo Perkenalkan Nama Saya <b> M.Fahri Al SyaBa </b>';
});

// URL 2 //
Route::get('/life', function () {
    return 'Saya Tinggal Di <b> Samarinda </b>';
});

// URL 3 //
Route::get('/born', function () {
    return 'Saya lahir di <b> Kota Bangun </b> Tanggal <b> 17 November </b>';
});

// URL 4 //
Route::get('/univ', function () {
    return 'Saya Mahasiswa <b> UMKT </b> Angkatan <b> 2018 </b>';
});

// URL 5 //
Route::get('/majors', function () {
    return 'Saya Jurusan <b> S1 Teknik Informatika </b> Fakultas <b> Sains dan Teknologi </b>';
});


// URL Controller fahrisatu //
use App\Http\Controllers\FahrisatuController;

Route::get("/fahrisatu/one", [FahrisatuController::class, "one"]);
Route::get("/fahrisatu/two", [FahrisatuController::class, "two"]);
Route::get("/fahrisatu/three", [FahrisatuController::class, "three"]);

// URL Controller fahridua //
use App\Http\Controllers\FahriduaController;

Route::get("/fahridua/satu", [FahriduaController::class, "satu"]);
Route::get("/fahridua/dua", [FahriduaController::class, "dua"]);
Route::get("/fahridua/tiga", [FahriduaController::class, "tiga"]);