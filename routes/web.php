<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangBaruController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

// Routes untuk Barang
Route::get('/barang', [BarangBaruController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangBaruController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangBaruController::class, 'store'])->name('barang.store');
Route::get('/barang/{id}', [BarangBaruController::class, 'show'])->name('barang.show');
Route::get('/barang/{id}/edit', [BarangBaruController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{id}', [BarangBaruController::class, 'update'])->name('barang.update');
Route::delete('/barang/{id}', [BarangBaruController::class, 'destroy'])->name('barang.destroy');

// Routes untuk Barang Masuk
Route::get('/barang-masuk', [BarangMasukController::class, 'index'])->name('barangMasuk.index');
Route::get('/barang-masuk/create', [BarangMasukController::class, 'create'])->name('barangMasuk.create');
Route::post('/barang-masuk', [BarangMasukController::class, 'store'])->name('barangMasuk.store');
Route::get('/barang-masuk/{id}', [BarangMasukController::class, 'show'])->name('barangMasuk.show');
Route::get('/barang-masuk/{id}/edit', [BarangMasukController::class, 'edit'])->name('barangMasuk.edit');
Route::put('/barang-masuk/{id}', [BarangMasukController::class, 'update'])->name('barangMasuk.update');
Route::delete('/barang-masuk/{id}', [BarangMasukController::class, 'destroy'])->name('barangMasuk.destroy');

// Routes untuk Barang Keluar
Route::get('/barang-keluar', [BarangKeluarController::class, 'index'])->name('barangKeluar.index');
Route::get('/barang-keluar/create', [BarangKeluarController::class, 'create'])->name('barangKeluar.create');
Route::post('/barang-keluar', [BarangKeluarController::class, 'store'])->name('barangKeluar.store');
Route::get('/barang-keluar/{id}', [BarangKeluarController::class, 'show'])->name('barangKeluar.show');
Route::get('/barang-keluar/{id}/edit', [BarangKeluarController::class, 'edit'])->name('barangKeluar.edit');
Route::put('/barang-keluar/{id}', [BarangKeluarController::class, 'update'])->name('barangKeluar.update');
Route::delete('/barang-keluar/{id}', [BarangKeluarController::class, 'destroy'])->name('barangKeluar.destroy');

// Routes untuk Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

// Routes untuk Transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::get('/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');

// Routes untuk Laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/{id}', [LaporanController::class, 'show'])->name('laporan.show');
Route::get('/laporan/{id}/edit', [LaporanController::class, 'edit'])->name('laporan.edit');
Route::put('/laporan/{id}', [LaporanController::class, 'update'])->name('laporan.update');
Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');