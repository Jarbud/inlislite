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
    return view('dashboard');
});

Route::get('/baca', function () {
    return view('baca_ditempat');
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

Route::get('/statistik', function () {
    return view('statistik_body');
});

Route::get('/daf_katalog', function () {
    return view('admin/daftar_katalog');
});

Route::get('/salin_kat', function () {
    return view('admin/salin_katalog');
});

Route::get('/export_kat', function () {
    return view('admin/exportdatakatalog');
});

Route::get('/KontenDigital_kat', function () {
    return view('admin/daftar_kontendigital');
});

Route::get('/keranjang_kat', function () {
    return view('admin/keranjangkatalog');
});

Route::get('/karantina_kat', function () {
    return view('admin/karantinakatalog');
});

Route::get('/entri_kol', function () {
    return view('admin/entrikoleksi');
});

Route::get('/admin/changepassworduser', function () {
    return view('admin/changepassworduser');
});

Auth::routes();

// URL
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/opac', [App\Http\Controllers\OpacController::class, 'show'])->name('opac');
Route::get('/daftar-show', [App\Http\Controllers\PendaftaranController::class, 'show'])->name('daftar-show');
Route::post('/daftar', [App\Http\Controllers\PendaftaranController::class, 'store'])->name('daftar');
Route::get('/survey-show', [App\Http\Controllers\SurveyController::class, 'show'])->name('survey-show');
Route::post('/survey', [App\Http\Controllers\SurveyController::class, 'store'])->name('survey');
Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class, 'index'])->name('verifikasi');
Route::get('/admin/verifikasi-account', [App\Http\Controllers\VeraccountController::class, 'index'])->name('verifikasi-account');
Route::get('/home2', [App\Http\Controllers\DashboardmhsController::class, 'index'])->name('home2');
Route::get('/admin/usermanagement', [App\Http\Controllers\UsermanagementController::class, 'index'])->name('usermanagement');
Route::post('newpassword/{id}', [App\Http\Controllers\NewpasswordController::class, 'newpassword'])->name('newpassword');
Route::get('/admin/profile', [App\Http\Controllers\ProfilController::class, 'index'])->name('profile');
Route::post('uploadPhoto/{id}', [App\Http\Controllers\ProfilController::class, 'storePhoto'])->name('uploadPhoto');
Route::post('uploadPhotoVerify/{id}', [App\Http\Controllers\VerifikasiController::class, 'storePhoto'])->name('uploadPhotoVerify');
Route::post('updatePhotoVerify/{id}', [App\Http\Controllers\VerifikasiController::class, 'UpdatePhoto'])->name('updatePhotoVerify');
Route::get('notifications/get', [App\Http\Controllers\NotificationsController::class, 'getNotificationsData'])->name('notifications.get');
Route::get('updateStatusVerify/{id}/{status}', [App\Http\Controllers\VeraccountController::class, 'updateStatusVerify'])->name('updateStatusVerify');
Route::get('/upload', [App\Http\Controllers\coverUploadController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload-cover', [App\Http\Controllers\coverUploadController::class, 'upload'])->name('upload.file');
Route::get('/katalog', [\App\Http\Controllers\KatalogController::class, 'show'])->name('katalog');
Route::post('/katalog-store', [\App\Http\Controllers\KatalogController::class, 'store'])->name('katalog-store');
Route::get('/koleksi', [App\Http\Controllers\KoleksiController::class, 'show'])->name('koleksi');
Route::get('/konten-Digital', [\App\Http\Controllers\kontenDigitalController::class, 'show'])->name('kontendigital');

//RESOURCES
Route::resource('usermanagement', App\Http\Controllers\UsermanagementController::class);
Route::resource('registerusers', App\Http\Controllers\Auth\RegisterController::class);
