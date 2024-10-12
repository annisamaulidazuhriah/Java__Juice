@extends('layouts.app')

@section('content')
    <h1>Tambah Barang</h1>

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" id="nama_barang" required>

        <label for="stok_barang">Stok Barang:</label>
        <input type="number" name="stok_barang" id="stok_barang" required>

        <label for="jenis_barang">Jenis Barang:</label>
        <input type="text" name="jenis_barang" id="jenis_barang" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
