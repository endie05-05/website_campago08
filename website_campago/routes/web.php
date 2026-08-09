<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OfficialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PotentialController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SuratRequestController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\VillageProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/formulir/sktm', function () {
    return view('formulir.sktm');
})->name('formulir.sktm');
Route::post('/formulir/sktm', [SuratRequestController::class, 'storeSktm'])->name('formulir.sktm.store');

Route::get('/formulir/sku', function () {
    return view('formulir.sku');
})->name('formulir.sku');
Route::post('/formulir/sku', [SuratRequestController::class, 'storeSku'])->name('formulir.sku.store');

Route::get('/formulir/domisili', function () {
    return view('formulir.domisili');
})->name('formulir.domisili');
Route::post('/formulir/domisili', [SuratRequestController::class, 'storeDomisili'])->name('formulir.domisili.store');

Route::get('/pengaduan', [ContactMessageController::class, 'create'])->name('pengaduan.form');
Route::post('/pengaduan', [ContactMessageController::class, 'store'])->name('pengaduan.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/admin/aparatur', [OfficialController::class, 'update'])->name('admin.aparatur.update');
    Route::post('/admin/potensi', [PotentialController::class, 'update'])->name('admin.potensi.update');
    Route::post('/admin/statistik', [VillageProfileController::class, 'updateStats'])->name('admin.statistik.update');
    Route::post('/admin/kontak', [SettingController::class, 'updateKontak'])->name('admin.kontak.update');
    Route::post('/admin/galeri', [GalleryController::class, 'update'])->name('admin.galeri.update');
    Route::post('/admin/umkm', [UmkmController::class, 'update'])->name('admin.umkm.update');
    Route::post('/admin/berita', [PostController::class, 'update'])->name('admin.berita.update');
    Route::post('/admin/peta', [LocationController::class, 'update'])->name('admin.peta.update');
    Route::post('/admin/pengaduan/{contactMessage}/status', [ContactMessageController::class, 'updateStatus'])->name('admin.pengaduan.status');
    Route::post('/admin/pengaduan/{contactMessage}/hapus', [ContactMessageController::class, 'destroy'])->name('admin.pengaduan.destroy');
    Route::post('/admin/surat/{suratRequest}/status', [SuratRequestController::class, 'updateStatus'])->name('admin.surat.status');
    Route::post('/admin/surat/{suratRequest}/hapus', [SuratRequestController::class, 'destroy'])->name('admin.surat.destroy');
});
