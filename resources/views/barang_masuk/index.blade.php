@extends('layouts.app')

@section('content')
    <h1>Daftar Barang Masuk</h1>
    <a href="{{ route('barangMasuk.create') }}">Tambah Barang Masuk</a>
    <ul>
        @foreach($barangMasuk as $item)
            <li>Barang: {{ $item->barang->nama_barang }} | Jumlah: {{ $item->jumlah }} | Tanggal: {{ $item->tanggal }} - 
                <a href="{{ route('barangMasuk.show', $item->id) }}">Detail</a>
            </li>
        @endforeach
    </ul>
@endsection
