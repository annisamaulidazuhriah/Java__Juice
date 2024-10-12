@extends('layouts.app')

@section('content')
    <h1>Edit Laporan</h1>

    <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $laporan->tanggal }}" required>

        <label for="jumlah_penjualan">Jumlah Penjualan:</label>
        <input type="number" name="jumlah_penjualan" id="jumlah_penjualan" value="{{ $laporan->jumlah_penjualan }}" required>

        <label for="pendapatan">Pendapatan:</label>
        <input type="number" name="pendapatan" id="pendapatan" value="{{ $laporan->pendapatan }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
