<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\Laporan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display the beranda with various data.
     */
    public function index()
    {
        // Mengambil total jumlah barang
        $totalBarang = Barang::count();

        // Mengambil total jumlah barang masuk
        $totalBarangMasuk = BarangMasuk::count();

        // Mengambil total jumlah barang keluar
        $totalBarangKeluar = BarangKeluar::count();

        // Mengambil total produk yang tersedia
        $totalProduk = Produk::count();

        // Mengambil total transaksi yang sudah dilakukan
        $totalTransaksi = Transaksi::count();

        // Mengambil total laporan
        $totalLaporan = Laporan::count();

        // Mengirim data ke view beranda
        return view('beranda', [
            'totalBarang' => $totalBarang,
            'totalBarangMasuk' => $totalBarangMasuk,
            'totalBarangKeluar' => $totalBarangKeluar,
            'totalProduk' => $totalProduk,
            'totalTransaksi' => $totalTransaksi,
            'totalLaporan' => $totalLaporan,
        ]);
    }
}
