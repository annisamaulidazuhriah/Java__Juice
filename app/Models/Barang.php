<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_barang',
        'stok_barang',
        'jenis_barang'
    ];

    // Jika kolom timestamps (created_at, updated_at) tidak ada di tabel
    public $timestamps = false;

    // Relasi ke entitas lain (contoh: relasi ke tabel barang_keluar)
    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class);
    }

    // Relasi ke tabel barang_masuk
    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class);
    }
}
