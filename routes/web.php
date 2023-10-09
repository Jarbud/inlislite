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

Route::get('/berhasil-mendaftar', function () {
    return view('success_daftar');
});

// Route::get('/dashboard', function () {
//     return view('admin/dashboardmahasiswa');
// });

Auth::routes();

// URL
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardmhsController::class, 'index'])->name('dashboard');
Route::get('/karya-ilmiah-mahasiswa', [App\Http\Controllers\KaryailmiahmhsController::class, 'index'])->name('karya-ilmiah-mahasiswa');
Route::get('/karya-ilmiah-admin', [App\Http\Controllers\KaryailmiahadminController::class, 'index'])->name('karya-ilmiah-admin');
Route::get('/upload-karya-ilmiah-mahasiswa', [App\Http\Controllers\KaryailmiahmhsController::class, 'create'])->name('upload-karya-ilmiah-mahasiswa');
Route::get('/opac', [App\Http\Controllers\OpacController::class, 'show'])->name('opac');
Route::get('/daftar-show', [App\Http\Controllers\PendaftaranController::class, 'show'])->name('daftar-show');
Route::post('/daftar', [App\Http\Controllers\PendaftaranController::class, 'store'])->name('daftar');
Route::get('/survey-show', [App\Http\Controllers\SurveyController::class, 'show'])->name('survey-show');
Route::post('/survey', [App\Http\Controllers\SurveyController::class, 'store'])->name('survey');
Route::get('/verifikasi', [App\Http\Controllers\VerifikasiController::class, 'index'])->name('verifikasi');
Route::get('/admin/verifikasi-account', [App\Http\Controllers\VeraccountController::class, 'index'])->name('verifikasi-account');
Route::get('/admin/verifikasi-anggota', [App\Http\Controllers\VeranggotaController::class, 'index'])->name('verifikasi-anggota');
Route::get('/home2', [App\Http\Controllers\DashboardmhsController::class, 'index'])->name('home2');
Route::get('/admin/usermanagement', [App\Http\Controllers\UsermanagementController::class, 'index'])->name('usermanagement');
Route::post('newpassword/{id}', [App\Http\Controllers\NewpasswordController::class, 'newpassword'])->name('newpassword');
Route::get('/admin/profile', [App\Http\Controllers\ProfilController::class, 'index'])->name('profile');
Route::post('uploadPhoto/{id}', [App\Http\Controllers\ProfilController::class, 'storePhoto'])->name('uploadPhoto');
Route::post('uploadPhotoVerify/{id}', [App\Http\Controllers\VerifikasiController::class, 'storePhoto'])->name('uploadPhotoVerify');
Route::post('updatePhotoVerify/{id}', [App\Http\Controllers\VerifikasiController::class, 'UpdatePhoto'])->name('updatePhotoVerify');
Route::get('notifications/get', [App\Http\Controllers\NotificationsController::class, 'getNotificationsData'])->name('notifications.get');
Route::get('updateStatusVerify/{id}/{status}', [App\Http\Controllers\VeraccountController::class, 'updateStatusVerify'])->name('updateStatusVerify');
Route::get('updateStatusVerifyAnggota/{id}/{email}/{status}', [App\Http\Controllers\VeranggotaController::class, 'updateStatusVerify'])->name('updateStatusVerifyAnggota');
Route::get('updateStatusVerifyKiAcc/{id}', [App\Http\Controllers\KaryailmiahadminController::class, 'updateStatusVerifyKiAcc'])->name('updateStatusVerifyKiAcc');
Route::get('updateStatusVerifyKiDitolak', [App\Http\Controllers\KaryailmiahadminController::class, 'updateStatusVerifyKiDitolak'])->name('updateStatusVerifyKiDitolak');
Route::get('karyailmiahadminshow/{id}', [App\Http\Controllers\KaryailmiahadminController::class, 'show'])->name('karyailmiahadminshow');
Route::get('/katalog', [\App\Http\Controllers\KatalogController::class, 'show'])->name('katalog');
Route::post('/katalog-store', [\App\Http\Controllers\KatalogController::class, 'store'])->name('katalog-store');
Route::post('/katalog-upload', [\App\Http\Controllers\KatalogController::class, 'upload'])->name('katalog-upload');
/*Route::get('/koleksi', [App\Http\Controllers\KatalogController::class, 'show2'])->name('koleksi');
Route::post('/koleksi-store', [App\Http\Controllers\KatalogController::class, 'store2'])->name('koleksi-store');
Route::get('/upload', [App\Http\Controllers\KatalogController::class, 'show3'])->name('upload.form');
Route::post('/upload-cover', [App\Http\Controllers\KatalogController::class, 'upload3'])->name('upload.file');
Route::get('/konten-Digital', [\App\Http\Controllers\KatalogController::class, 'show4'])->name('kontendigital');
Route::post('/konten-Digital-store', [\App\Http\Controllers\KatalogController::class, 'upload4'])->name('kontendigital-store');*/
Route::get('/daf-katalog', [App\Http\Controllers\DaftarKatalogController::class, 'index']);
Route::get('/entri-katalog', [App\Http\Controllers\EntriCatalogController::class, 'show'])->name('entri');
Route::post('/entri-katalog-store', [App\Http\Controllers\EntriCatalogController::class, 'store'])->name('entri-store');
Route::get('/histori-sederhana', [App\Http\Controllers\OpacLogsController::class, 'index']);

//RESOURCES
Route::resource('usermanagement', App\Http\Controllers\UsermanagementController::class);
Route::resource('registerusers', App\Http\Controllers\Auth\RegisterController::class);
Route::resource('Karyailmiahmhs', App\Http\Controllers\KaryailmiahmhsController::class);
