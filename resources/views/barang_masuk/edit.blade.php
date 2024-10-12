@extends('layouts.app')

@section('content')
    <h1>Edit Barang Masuk</h1>

    <form action="{{ route('barangMasuk.update', $barangMasuk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="barang">Pilih Barang:</label>
        <select name="id_barang" id="barang">
            @foreach($barang as $item)
                <option value="{{ $item->id }}" {{ $item->id == $barangMasuk->id_barang ? 'selected' : '' }}>{{ $item->nama_barang }}</option>
            @endforeach
        </select>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" value="{{ $barangMasuk->jumlah }}" required>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $barangMasuk->tanggal }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
