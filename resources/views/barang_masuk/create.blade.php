@extends('layouts.app')

@section('content')
    <h1>Tambah Barang Masuk</h1>

    <form action="{{ route('barangMasuk.store') }}" method="POST">
        @csrf
        <label for="barang">Pilih Barang:</label>
        <select name="id_barang" id="barang">
            @foreach($barang as $item)
                <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
            @endforeach
        </select>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" required>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
