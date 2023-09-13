<?php

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

Route::get('/fromsearch', function() {
    return view('fromsearch');
});

Route::get('/bukutamu', function() {
    return view('bukutamu');
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

Route::get('/all', function() {
    return view('all');
});

Route::get('importexcel', function() {
    return view('importexcel');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
