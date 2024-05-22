<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\DetailPencabutanController;
use App\Http\Controllers\DetailPengajuanController;
use App\Http\Controllers\DetailPromoController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PencabutanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

Route::get('/', function () {
    return view('/auth/login');
});

// Route::get('/dashboard', [DashboardContoller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');



// Route::get('dashboard', [DashboardContoller::class, 'index'])
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');







Route::controller(AuthController::class)->group(function(){
    Route::get('register','register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login','loginAction')->name('login.action');

    Route::get('logout','logout')->middleware('auth')->name('logout');



});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function () {
        return view(('dashboard'));
        
    })->name('dashboard');

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::resource('paket',PaketController::class)->middleware('auth');

Route::resource('barang',BarangController::class)->middleware('auth');
Route::resource('pelanggan',PelangganController::class)->middleware('auth');
Route::resource('pengajuan',PengajuanController::class)->middleware('auth');
Route::resource('pencabutan',PencabutanController::class)->middleware('auth');
Route::resource('detailpengajuan',DetailPengajuanController::class)->middleware('auth');
Route::resource('detailpencabutan',DetailPencabutanController::class)->middleware('auth');
Route::resource('paket',PaketController::class)->middleware('auth');
Route::resource('promo',PromoController::class)->middleware('auth');
Route::resource('detailpromo',DetailPromoController::class);
Route::resource('dashboard', DashboardController::class)->middleware('auth');
// Route::get('/dashboard/pengajuan', [DashboardController::class, 'pengajuan'])->middleware(['auth', 'verified'])->name('dashboard_pengajuan');
// Route::get('/dashboard/pencabutan', [DashboardController::class, 'pencabutan'])->middleware(['auth', 'verified'])->name('dashboard_pencabutan');
Route::get('pdf', [PDFController::class, 'generatePDF']);
// Route::resource('report', PDFController::class );

// Route::get('/pdf', [PDFController::class, 'pdf'])->name('pdf.generate');
