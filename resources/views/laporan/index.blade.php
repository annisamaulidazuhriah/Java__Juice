@extends('layouts.app')

@section('content')
    <h1>Daftar Laporan</h1>
    <a href="{{ route('laporan.create') }}">Tambah Laporan</a>
    <ul>
        @foreach($laporan as $item)
            <li>Tanggal: {{ $item->tanggal }} | Penjualan: {{ $item->jumlah_penjualan }} | Pendapatan: Rp{{ $item->pendapatan }} - 
                <a href="{{ route('laporan.show', $item->id) }}">Detail</a>
            </li>
        @endforeach
    </ul>
@endsection
