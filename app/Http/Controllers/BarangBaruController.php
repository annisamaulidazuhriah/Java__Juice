<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangBaruController extends Controller
{
    // Menampilkan semua data barang
    public function index() {
        // Mengambil semua data barang dari model Barang
        $barangs = Barang::all();

        // Mengirim data ke view welcome.blade.php dengan compact
        return view('welcome', compact('barangs'));
    }

    // Menyimpan barang baru dengan validasi
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
            'stok_barang' => 'required|integer',
            'jenis_barang' => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Menyimpan data barang baru
        $barang = Barang::create($request->all());

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    // Menampilkan satu barang berdasarkan id
    public function show($id)
    {
        // Mengambil data barang berdasarkan id, jika tidak ditemukan tampilkan error 404
        $barang = Barang::findOrFail($id);

        return view('barang.show', compact('barang'));
    }

    // Mengupdate barang berdasarkan id dengan validasi
    public function update(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama_barang' => 'required|string|max:255',
            'stok_barang' => 'required|integer',
            'jenis_barang' => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Mengupdate data barang
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil diupdate!');
    }

    // Menghapus barang berdasarkan id
    public function destroy($id)
    {
        // Menghapus data barang berdasarkan id
        $barang = Barang::findOrFail($id);
        $barang->delete();

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect()->route('barangs.index')->with('success', 'Barang berhasil dihapus!');
    }
}
