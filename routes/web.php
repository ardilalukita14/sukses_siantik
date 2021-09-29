<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Pendaftaran;
use App\Http\Controllers\FormPasienBaruController;
use App\Http\Controllers\FormPasienLamaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengumumanController;

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
    return view('index');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/form-old-pasien', function() {
    //return view('form_basics');
//});

Route::get('/form-old-pasien', [FormPasienLamaController::class, 'form_old_pasien'])->name('form_basics');
Route::get('/form-new-pasien', [FormPasienBaruController::class, 'form_new_pasien'])->name('form_advanceds');

//Route::get('/form-old-pasien', function() {
    //return view('login');
//});

Route::get('/simple-tables', function() {
    return view('simple-tables');
});

// Route::get('/datatables', function() {
    // return view('datatables');
// });

//Route::get('/form-old-pasien',[LoginController::class, 'login'])->name('login');
//Route::post('/action', [LoginController::class, 'action'])->name('action');
//Route::get('/datatables', [DataController::class, 'data'])->name('datatables')->middleware('pendaftaran');

Route::resource('pengumuman', PengumumanController::class);

// Route::get('/tampilPengumuman', function () {
//     return view('pengumuman.tampil');
// });

Route::get('/tampilPengumuman', [PengumumanController::class, 'tampil']);
