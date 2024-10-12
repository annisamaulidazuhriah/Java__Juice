@extends('layouts.app')

@section('content')
    <h1>Edit Barang Keluar</h1>

    <form action="{{ route('barangKeluar.update', $barangKeluar->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="barang">Pilih Barang:</label>
        <select name="id_barang" id="barang">
            @foreach($barang as $item)
                <option value="{{ $item->id }}" {{ $item->id == $barangKeluar->id_barang ? 'selected' : '' }}>{{ $item->nama_barang }}</option>
            @endforeach
        </select>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" value="{{ $barangKeluar->jumlah }}" required>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ $barangKeluar->tanggal }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
