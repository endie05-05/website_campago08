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
use App\Http\Controllers\ResidentAuthController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SuratRequestController;
use App\Http\Controllers\SuratTemplateController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\VillageProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/layanan', function () {
    return view('layanan', [
        'suratTemplates' => \App\Models\SuratTemplate::where('is_active', true)->orderBy('sort_order')->get(),
        'villageProfile' => \App\Models\VillageProfile::first(),
        'kontak' => HomeController::kontakSettings(),
    ]);
});

Route::get('/berita/{post:slug}', [PostController::class, 'show'])->name('berita.show');
Route::get('/umkm/{umkm:slug}', [UmkmController::class, 'show'])->name('umkm.show');

Route::get('/formulir/custom/{suratTemplate:slug}', [SuratRequestController::class, 'showCustom'])->name('formulir.custom');
Route::post('/formulir/custom/{suratTemplate:slug}', [SuratRequestController::class, 'storeCustom'])->name('formulir.custom.store');

Route::get('/pengaduan', [ContactMessageController::class, 'create'])->name('pengaduan.form');
Route::post('/pengaduan', [ContactMessageController::class, 'store'])->name('pengaduan.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::prefix('warga')->name('warga.')->group(function () {
    Route::get('/login', [ResidentAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [ResidentAuthController::class, 'login'])->name('login.store');
    Route::get('/daftar', [ResidentAuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/daftar', [ResidentAuthController::class, 'register'])->name('register.store');
    Route::post('/logout', [ResidentAuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/admin/aparatur', [OfficialController::class, 'store'])->name('admin.aparatur.store');
    Route::post('/admin/aparatur/{official}', [OfficialController::class, 'update'])->name('admin.aparatur.update');
    Route::post('/admin/aparatur/{official}/hapus', [OfficialController::class, 'destroy'])->name('admin.aparatur.destroy');
    Route::post('/admin/potensi', [PotentialController::class, 'store'])->name('admin.potensi.store');
    Route::post('/admin/potensi/{potential}', [PotentialController::class, 'update'])->name('admin.potensi.update');
    Route::post('/admin/potensi/{potential}/hapus', [PotentialController::class, 'destroy'])->name('admin.potensi.destroy');
    Route::post('/admin/statistik', [VillageProfileController::class, 'updateStats'])->name('admin.statistik.update');
    Route::post('/admin/kontak', [SettingController::class, 'updateKontak'])->name('admin.kontak.update');
    Route::post('/admin/galeri', [GalleryController::class, 'store'])->name('admin.galeri.store');
    Route::post('/admin/galeri/{galeri}', [GalleryController::class, 'update'])->name('admin.galeri.update');
    Route::post('/admin/galeri/{galeri}/hapus', [GalleryController::class, 'destroy'])->name('admin.galeri.destroy');
    Route::post('/admin/umkm', [UmkmController::class, 'store'])->name('admin.umkm.store');
    Route::post('/admin/umkm/{umkm}', [UmkmController::class, 'update'])->name('admin.umkm.update');
    Route::post('/admin/umkm/{umkm}/hapus', [UmkmController::class, 'destroy'])->name('admin.umkm.destroy');
    Route::post('/admin/berita', [PostController::class, 'store'])->name('admin.berita.store');
    Route::post('/admin/berita/{post}', [PostController::class, 'update'])->name('admin.berita.update');
    Route::post('/admin/berita/{post}/hapus', [PostController::class, 'destroy'])->name('admin.berita.destroy');
    Route::post('/admin/fasum', [LocationController::class, 'update'])->name('admin.fasum.update');
    Route::post('/admin/pengaduan/{contactMessage}/status', [ContactMessageController::class, 'updateStatus'])->name('admin.pengaduan.status');
    Route::post('/admin/pengaduan/{contactMessage}/hapus', [ContactMessageController::class, 'destroy'])->name('admin.pengaduan.destroy');
    Route::post('/admin/surat/{suratRequest}/status', [SuratRequestController::class, 'updateStatus'])->name('admin.surat.status');
    Route::post('/admin/surat/{suratRequest}/hapus', [SuratRequestController::class, 'destroy'])->name('admin.surat.destroy');

    Route::post('/admin/surat-template', [SuratTemplateController::class, 'store'])->name('admin.surat-template.store');
    Route::post('/admin/surat-template/{suratTemplate}', [SuratTemplateController::class, 'update'])->name('admin.surat-template.update');
    Route::post('/admin/surat-template/{suratTemplate}/hapus', [SuratTemplateController::class, 'destroy'])->name('admin.surat-template.destroy');
});
