<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangBaruController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;

// Routes untuk Barang
Route::resource('barang', BarangBaruController::class);

// Routes untuk Barang Masuk
Route::resource('barang-masuk', BarangMasukController::class);

// Routes untuk Barang Keluar
Route::resource('barang-keluar', BarangKeluarController::class);

// Routes untuk Produk
Route::resource('produk', ProdukController::class);

// Routes untuk Transaksi
Route::resource('transaksi', TransaksiController::class);

// Routes untuk Laporan
Route::resource('laporan', LaporanController::class);
