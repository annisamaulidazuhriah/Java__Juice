@extends('layouts.app')

@section('content')
    <h1>Daftar Transaksi</h1>
    <a href="{{ route('transaksi.create') }}">Tambah Transaksi</a>
    <ul>
        @foreach($transaksi as $item)
            <li>ID Transaksi: {{ $item->id_transaksi }} | Barang: {{ $item->barang->nama_barang }} | Produk: {{ $item->produk->nama_produk }} | Harga Total: Rp{{ $item->harga_total }} - 
                <a href="{{ route('transaksi.show', $item->id) }}">Detail</a>
            </li>
        @endforeach
    </ul>
@endsection
