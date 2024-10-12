@extends('layouts.app')

@section('content')
    <h1>Edit Transaksi</h1>

    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="id_barang">Pilih Barang:</label>
        <select name="id_barang" id="id_barang">
            @foreach($barang as $item)
                <option value="{{ $item->id }}" {{ $item->id == $transaksi->id_barang ? 'selected' : '' }}>{{ $item->nama_barang }}</option>
            @endforeach
        </select>

        <label for="id_produk">Pilih Produk:</label>
        <select name="id_produk" id="id_produk">
            @foreach($produk as $item)
                <option value="{{ $item->id }}" {{ $item->id == $transaksi->id_produk ? 'selected' : '' }}>{{ $item->nama_produk }}</option>
            @endforeach
        </select>

        <label for="harga_total">Harga Total:</label>
        <input type="number" name="harga_total" id="harga_total" value="{{ $transaksi->harga_total }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
