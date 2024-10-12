@extends('layouts.app')

@section('content')
    <h1>Edit Produk</h1>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
