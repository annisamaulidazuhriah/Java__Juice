@extends('layouts.app')

@section('content')
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}">Tambah Barang</a>
    <ul>
        @foreach($barang as $item)
            <li>{{ $item->nama_barang }} - Stok: {{ $item->stok_barang }} - <a href="{{ route('barang.show', $item->id) }}">Detail</a></li>
        @endforeach
    </ul>
@endsection
