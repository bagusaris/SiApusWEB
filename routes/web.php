<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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


// //route untuk poli
// Route::prefix('polis')->group(function(){
//     Route::get('/view',[PoliController::class, 'DetailPoli'])->name('detail.poli');
// });

//route untuk pasien
// Route::prefix('pasiens')->group(function(){
//     Route::get('/view',[PasienController::class, 'PasienView'])->name('pasien.view');
//     Route::get('/add',[PasienController::class, 'PasienAdd'])->name('pasien.add');
//     Route::post('/store',[PasienController::class, 'PasiensStore'])->name('pasiens.store');
// });
Route::Resource('/pasiens', PasienController::class);
