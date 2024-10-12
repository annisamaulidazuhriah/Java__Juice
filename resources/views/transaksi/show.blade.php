@extends('layouts.app')

@section('content')
    <h1>Detail Transaksi</h1>
    <p>ID Transaksi: {{ $transaksi->id_transaksi }}</p>
    <p>Barang: {{ $transaksi->barang->nama_barang }}</p>
    <p>Produk: {{ $transaksi->produk->nama_produk }}</p>
    <p>Harga Total: Rp{{ $transaksi->harga_total }}</p>

    <a href="{{ route('transaksi.edit', $transaksi->id) }}">Edit</a>

    <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@endsection
