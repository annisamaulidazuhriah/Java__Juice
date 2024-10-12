@extends('layouts.app')

@section('content')
    <h1>Tambah Produk</h1>

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
