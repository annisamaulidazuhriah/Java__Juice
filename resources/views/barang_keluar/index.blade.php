@extends('layouts.app')

@section('content')
    <h1>Daftar Barang Keluar</h1>
    <a href="{{ route('barangKeluar.create') }}">Tambah Barang Keluar</a>
    <ul>
        @foreach($barangKeluar as $item)
            <li>Barang: {{ $item->barang->nama_barang }} | Jumlah: {{ $item->jumlah }} | Tanggal: {{ $item->tanggal }} - 
                <a href="{{ route('barangKeluar.show', $item->id) }}">Detail</a>
            </li>
        @endforeach
    </ul>
@endsection
