@extends('layouts.app')

@section('content')
    <h1>Detail Barang Masuk</h1>
    <p>Barang: {{ $barangMasuk->barang->nama_barang }}</p>
    <p>Jumlah: {{ $barangMasuk->jumlah }}</p>
    <p>Tanggal: {{ $barangMasuk->tanggal }}</p>
    
    <a href="{{ route('barangMasuk.edit', $barangMasuk->id) }}">Edit</a>

    <form action="{{ route('barangMasuk.destroy', $barangMasuk->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@endsection
