@extends('layouts.app')

@section('content')
    <h1>Tambah Transaksi</h1>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf
        <label for="id_barang">Pilih Barang:</label>
        <select name="id_barang" id="id_barang">
            @foreach($barang as $item)
                <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
            @endforeach
        </select>

        <label for="id_produk">Pilih Produk:</label>
        <select name="id_produk" id="id_produk">
            @foreach($produk as $item)
                <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
            @endforeach
        </select>

        <label for="harga_total">Harga Total:</label>
        <input type="number" name="harga_total" id="harga_total" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
