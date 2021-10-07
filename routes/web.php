<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Pendaftaran;
use App\Http\Controllers\FormPasienBaruController;
use App\Http\Controllers\FormPasienLamaController;
use App\Http\Controllers\DataPendaftaranBaruController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\JadwalController;

use App\Http\Controllers\DataPasienController;
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

Auth::routes();

Route::get('/', [PengumumanController::class, 'tampil']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/form-old-pasien', function() {
//return view('form_basics');
//});

Route::get('/form-old-pasien', [FormPasienLamaController::class, 'form_old_pasien'])->name('form_basics');
Route::get('/form-new-pasien', [DaftarController::class, 'create']);
Route::post('/daftar', [DaftarController::class, 'store']);
Route::get('/cekPendaftar', [DaftarController::class, 'index']);
Route::resource('daftarBaru', DataPendaftaranBaruController::class);
Route::get('/antrian', [DaftarController::class, 'antrian']);
Route::get('/cetak_pdf/{id}', [DaftarController::class, 'cetak_pdf']);

//Route::get('/form-old-pasien', function() {
//return view('login');
//});

Route::get('/simple-tables', function () {
    return view('simple-tables');
});

Route::get('/datatables', function () {
    return view('datatables');
});

//Route::get('/daftar-pasien', function() {
//return view('dataPasien.index');
//});

Route::resource('dataPasien',  DataPasienController::class);
//Route::get('/form-old-pasien',[LoginController::class, 'login'])->name('login');
//Route::post('/action', [LoginController::class, 'action'])->name('action');
//Route::get('/datatables', [DataController::class, 'data'])->name('datatables')->middleware('pendaftaran');

Route::resource('pengumuman', PengumumanController::class);

// Route::get('/tampilPengumuman', function () {
//     return view('pengumuman.tampil');
// });

Route::get('/tampilPengumuman', [PengumumanController::class, 'tampil']);
//Route::get('/datatables', [DataController::class, 'data'])->name('datatables')->middleware('pendaftaran');

Route::resource('jadwal', JadwalController::class);
Route::get('/tampilJadwal', [JadwalController::class, 'tampil']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
