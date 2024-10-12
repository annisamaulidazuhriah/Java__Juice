@extends('layouts.app')

@section('content')
    <h1>Edit Barang</h1>

    <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" id="nama_barang" value="{{ $barang->nama_barang }}" required>

        <label for="stok_barang">Stok Barang:</label>
        <input type="number" name="stok_barang" id="stok_barang" value="{{ $barang->stok_barang }}" required>

        <label for="jenis_barang">Jenis Barang:</label>
        <input type="text" name="jenis_barang" id="jenis_barang" value="{{ $barang->jenis_barang }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
