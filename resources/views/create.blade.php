@extends('layout')

@section('content')
<h2>Tambah Barang Baru</h2>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
    </div>
    <div class="mb-3">
        <label for="stok_barang" class="form-label">Stok Barang</label>
        <input type="number" class="form-control" id="stok_barang" name="stok_barang" required>
    </div>
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Jenis Barang</label>
        <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection