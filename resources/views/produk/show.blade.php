@extends('layouts.app')

@section('content')
    <h1>Detail Produk</h1>
    <p>Nama Produk: {{ $produk->nama_produk }}</p>
    <p>Harga: Rp{{ $produk->harga }}</p>

    <a href="{{ route('produk.edit', $produk->id) }}">Edit</a>

    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@endsection
