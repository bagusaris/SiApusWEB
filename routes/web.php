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
    return view('siapus.index');
})->name('beranda');

Route::get('/informasipoli', function () {
    return view('siapus.informasipoli');
})->name('informasipoli');

Route::get('/daftar', function () {
    return view('siapus.pendaftaranantrean');
})->name('daftar');

Route::get('/tiket', function () {
    return view('siapus.antreansaya');
})->name('tiket');
