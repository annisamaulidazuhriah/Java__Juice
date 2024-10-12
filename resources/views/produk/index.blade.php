@extends('layouts.app')

@section('content')
    <h1>Daftar Produk</h1>
    <a href="{{ route('produk.create') }}">Tambah Produk</a>
    <ul>
        @foreach($produk as $item)
            <li>{{ $item->nama_produk }} - Harga: Rp{{ $item->harga }} - <a href="{{ route('produk.show', $item->id) }}">Detail</a></li>
        @endforeach
    </ul>
@endsection
