@extends('layouts.app')

@section('content')
    <h1>Detail Laporan</h1>
    <p>Tanggal: {{ $laporan->tanggal }}</p>
    <p>Jumlah Penjualan: {{ $laporan->jumlah_penjualan }}</p>
    <p>Pendapatan: Rp{{ $laporan->pendapatan }}</p>

    <a href="{{ route('laporan.edit', $laporan->id) }}">Edit</a>

    <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@endsection
