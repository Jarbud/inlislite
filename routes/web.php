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

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/viewcollection', function() {
    return view('viewcollection');
});

Route::get('/statistic', function() {
    return view('statistic');
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



// Route::get('/daf_katalog', function () {
//     return view('admin/katalog/daftar_katalog');
// });

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
Route::get('/katalog', [App\Http\Controllers\KatalogController::class, 'show'])->name('katalog');
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
Route::get('verifyshow/{id}', [App\Http\Controllers\VeranggotaController::class, 'show'])->name('verifyshow');
Route::post('/katalog-store', [App\Http\Controllers\KatalogController::class, 'store'])->name('katalog-store');
Route::post('/katalog-upload', [App\Http\Controllers\KatalogController::class, 'upload'])->name('katalog-upload');
Route::get('/daf-katalog', [App\Http\Controllers\DaftarKatalogController::class, 'index']);
Route::get('catalog/edit/{id}', [App\Http\Controllers\DaftarKatalogController::class, 'edit'])->name('catalog');
Route::put('catalog/update/{id}', [App\Http\Controllers\DaftarKatalogController::class, 'update'])->name('catalog-update');
Route::get('/entri-katalog', [App\Http\Controllers\EntriCatalogController::class, 'show'])->name('entri');
Route::post('/entri-katalog-store', [App\Http\Controllers\EntriCatalogController::class, 'store'])->name('entri-store');
Route::get('pilihkatalog/{id}', [App\Http\Controllers\EntriCatalogController::class, 'pilihkatalog'])->name('pilihkatalog');
Route::get('/histori-sederhana', [App\Http\Controllers\OpacLogsController::class, 'index']);
Route::get('/histori-sederhana/fetch_data', [App\Http\Controllers\OpacLogsController::class, 'fetch_data']);
Route::get('/buku', [App\Http\Controllers\KunjunganController::class, 'show1']);
Route::post('/bukuTamu/store', [App\Http\Controllers\KunjunganController::class, 'store1'])->name('Bukutamu.store');
Route::get('/input', [App\Http\Controllers\KunjunganController::class, 'show'])->name('input');
Route::get('/check', [App\Http\Controllers\KunjunganController::class, 'check'])->name('bukutamu');
Route::post('/simpan', [App\Http\Controllers\KunjunganController::class, 'store'])->name('bukutamu.store');
Route::get('/bacaditempat', [App\Http\Controllers\BacaDiTempatController::class, 'index']);

Route::get('/', [\App\Http\Controllers\BagianDepanController::class, 'show'])->name('index');

Route::get('/0entrikoleksi', [\App\Http\Controllers\AkuisisiController::class, 'show'])->name('0entrikoleksi');
Route::post('/0entrikoleksi-store', [\App\Http\Controllers\AkuisisiController::class, 'store'])->name('0entrikoleksi-store');
Route::get('/viewcollection', [\App\Http\Controllers\ViewCollectionController::class, 'show'])->name('viewcollection');
Route::get('/viewopac', [\App\Http\Controllers\ViewOpac::class, 'show'])->name('viewopac');
Route::post('/bukutamu-store', [\App\Http\Controllers\bukutamuController::class, 'store'])->name('bukutamu-store');
Route::get('/fromsearch', [\App\Http\Controllers\fromsearchController::class, 'show'])->name('fromsearch');
Route::get('/fromsearch/search', [\App\Http\Controllers\fromsearchController::class, 'search'])->name('fromsearch.search');
Route::get('/0terbitanberkala', [\App\Http\Controllers\TerbitanBerkala::class, 'show'])->name('0terbitanberkala');
Route::get('/0daftarkoleksi', [\App\Http\Controllers\DaftarKoleksi::class, 'show'])->name('0daftarkoleksi');

Route::get('/katalog/{id}', [\App\Http\Controllers\ItemController::class, 'show'])->name('viewdetail');

Route::get('/pencariankoleksi', [\App\Http\Controllers\PencarianKoleksiController::class, 'show'])->name('pencariankoleksi');
Route::get('/pencariankoleksi/search', [\App\Http\Controllers\PencarianKoleksiController::class, 'search'])->name('pencariankoleksi.search');


Route::get('barcode-blade', function () {
    return view('dashboardmahasiswa', compact('barcode'));
});

//RESOURCES
Route::resource('usermanagement', App\Http\Controllers\UsermanagementController::class);
Route::resource('registerusers', App\Http\Controllers\Auth\RegisterController::class);
Route::resource('Karyailmiahmhs', App\Http\Controllers\KaryailmiahmhsController::class);
