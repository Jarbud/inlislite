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
    return view('index');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/viewcollection', function() {
    return view('viewcollection');
});

Route::get('/statistic', function() {
    return view('statistic');
});

Route::get('/viewdetail', function() {
    return view('viewdetail');
});

Route::get('/borrowed', function() {
    return view('borrowed');
});

Route::get('/return', function() {
    return view('return');
});

Route::get('/survei', function() {
    return view('survei');
});

Route::get('/artikel', function() {
    return view('artikel');
});

Route::get('/masterlogin', function() {
    return view('masterlogin');
});

Route::get('/carousel', function() {
    return view('carousel');
});

Route::get('/entrikoleksi', function() {
    return view('entrikoleksi');
});

Route::get('/optionvalues', function() {
    return view('optionvalues');
});

Route::get('/all', function() {
    return view('all');
});

Route::get('importexcel', function() {
    return view('importexcel');
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

Route::get('/0importexcel', function() {
    return view('admin/akuisisi/0importexcel');
});

/*Route::get('/0daftarkoleksi', function() {
    return view('admin/0daftarkoleksi');
});*/

Route::get('/0jilidkoleksi', function() {
    return view('admin/akuisisi/0jilidkoleksi');
});

Route::get('/0daftarusulan', function() {
    return view('admin/akuisisi/0daftarusulan');
});

Route::get('/0emptymodal', function() {
    return view('admin/akuisisi/0emptymodal');
});


Route::get('/0karantina', function() {
    return view('admin/akuisisi/0karantinakoleksi');
});

Route::get('/0keranjang', function() {
    return view('admin/akuisisi/0keranjangkoleksi');
});

Route::get('/0tambahfilter', function() {
    return view('admin/akuisisi/0tambahfilter');
});

Route::get('/0tambah', function() {
    return view('admin/akuisisi/0tambah');
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

Route::get('/0entrikoleksi', [\App\Http\Controllers\AkuisisiController::class, 'show'])->name('0entrikoleksi');
Route::post('/0entrikoleksi-store', [\App\Http\Controllers\AkuisisiController::class, 'store'])->name('0entrikoleksi-store');
Route::get('/viewcollection', [\App\Http\Controllers\ViewCollectionController::class, 'show'])->name('viewcollection');
Route::get('/bukutamu', [\App\Http\Controllers\bukutamuController::class, 'show'])->name('bukutamu');
Route::post('/bukutamu-store', [\App\Http\Controllers\bukutamuController::class, 'store'])->name('bukutamu-store');
Route::get('/fromsearch', [\App\Http\Controllers\fromsearchController::class, 'show'])->name('fromsearch');

Route::get('/0terbitanberkala', [\App\Http\Controllers\TerbitanBerkala::class, 'show'])->name('0terbitanberkala');
Route::get('/0daftarkoleksi', [\App\Http\Controllers\DaftarKoleksi::class, 'show'])->name('0daftarkoleksi');

//RESOURCES
Route::resource('usermanagement', App\Http\Controllers\UsermanagementController::class);
Route::resource('registerusers', App\Http\Controllers\Auth\RegisterController::class);
