<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BarangBaruController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

// Halaman awal
Route::get('/', function () {
    return view('Selamat datang'); // Halaman awal dengan tombol "Mulai"
});

// Rute dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Tambahkan rute lainnya untuk barang, barang masuk, barang keluar, produk, transaksi, dan laporan

Route::get('/', [BerandaController::class, 'index']);

// Halaman Beranda
Route::view('/', 'Beranda')->name('Beranda');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// Halaman Dashboard
Route::view('dashboard', 'dashboard')->name('dashboard');

// Rute untuk Barang
Route::get('/barang', [BarangBaruController::class, 'index'])->name('barang.index');

// Rute untuk Barang Masuk
Route::prefix('barang-masuk')->name('barangMasuk.')->group(function() {
    Route::get('/', [BarangMasukController::class, 'index'])->name('index');
    Route::get('/create', [BarangMasukController::class, 'create'])->name('create');
    Route::post('/store', [BarangMasukController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BarangMasukController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BarangMasukController::class, 'update'])->name('update');
    Route::delete('/{id}', [BarangMasukController::class, 'destroy'])->name('destroy');
});

// Rute untuk Barang Keluar
Route::prefix('barang-keluar')->name('barangKeluar.')->group(function() {
    Route::get('/', [BarangKeluarController::class, 'index'])->name('index');
    Route::get('/create', [BarangKeluarController::class, 'create'])->name('create');
    Route::post('/store', [BarangKeluarController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BarangKeluarController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BarangKeluarController::class, 'update'])->name('update');
    Route::delete('/{id}', [BarangKeluarController::class, 'destroy'])->name('destroy');
});

// Rute untuk Produk
Route::prefix('produk')->name('produk.')->group(function() {
    Route::get('/', [ProdukController::class, 'index'])->name('index');
    Route::get('/create', [ProdukController::class, 'create'])->name('create');
    Route::post('/store', [ProdukController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ProdukController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ProdukController::class, 'update'])->name('update');
    Route::delete('/{id}', [ProdukController::class, 'destroy'])->name('destroy');
});

// Rute untuk Transaksi
Route::prefix('transaksi')->name('transaksi.')->group(function() {
    Route::get('/', [TransaksiController::class, 'index'])->name('index');
    Route::get('/create', [TransaksiController::class, 'create'])->name('create');
    Route::post('/store', [TransaksiController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [TransaksiController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TransaksiController::class, 'update'])->name('update');
    Route::delete('/{id}', [TransaksiController::class, 'destroy'])->name('destroy');
});

// Rute untuk Laporan
Route::prefix('laporan')->name('laporan.')->group(function() {
    Route::get('/', [LaporanController::class, 'index'])->name('index');
    Route::get('/create', [LaporanController::class, 'create'])->name('create');
    Route::post('/store', [LaporanController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [LaporanController::class, 'edit'])->name('edit');
    Route::put('/{id}', [LaporanController::class, 'update'])->name('update');
    Route::delete('/{id}', [LaporanController::class, 'destroy'])->name('destroy');
});