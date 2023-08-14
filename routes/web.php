<?php

use App\Http\Controllers\MasterPendidikanController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/awal', function () {
    return view('dashboard');
});

Route::get('/baca', function () {
    return view('baca_ditempat');
});

Route::get('/simpan', function () {
    return view('arsip');
});

Route::get('/op_ac', function () {
    return view('opac');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/submit', function () {
    return view('submit');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/daftar', [App\Http\Controllers\PendaftaranController::class, 'show'])->name('daftar');
Route::post('/daftar', [App\Http\Controllers\PendaftaranController::class, 'store']);
Route::get('/daftar', [App\Http\Controllers\PendaftaranController::class, 'create']);
//Route::resource('daftar',App\Http\Controllers\PendaftaranController::class);