<?php

namespace App\Http\Controllers;

use App\Models\Barang; // Pastikan model Barang ada
use Illuminate\Http\Request;

class BarangBaruController extends Controller
{
    public function index()
    {
        // Menghitung jumlah total barang
        $totalBarang = Barang::count(); 

        // Mengirim data total barang ke view 'beranda'
        return view('beranda', ['totalBarang' => $totalBarang]);
}

    // Fungsi lain di controller Anda (misalnya create, store, dsb)
}
