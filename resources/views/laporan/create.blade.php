@extends('layouts.app')

@section('content')
    <h1>Tambah Laporan</h1>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required>

        <label for="jumlah_penjualan">Jumlah Penjualan:</label>
        <input type="number" name="jumlah_penjualan" id="jumlah_penjualan" required>

        <label for="pendapatan">Pendapatan:</label>
        <input type="number" name="pendapatan" id="pendapatan" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
