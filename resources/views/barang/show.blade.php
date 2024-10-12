@extends('layouts.app')

@section('content')
    <h1>Detail Barang</h1>
    <p>Nama Barang: {{ $barang->nama_barang }}</p>
    <p>Stok Barang: {{ $barang->stok_barang }}</p>
    <p>Jenis Barang: {{ $barang->jenis_barang }}</p>

    <a href="{{ route('barang.edit', $barang->id) }}">Edit</a>

    <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@endsection
