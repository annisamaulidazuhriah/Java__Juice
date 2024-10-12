@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manajemen Data</h1>

    <!-- Navigasi Tab -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#barang" data-toggle="tab">Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#barangMasuk" data-toggle="tab">Barang Masuk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#barangKeluar" data-toggle="tab">Barang Keluar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#produk" data-toggle="tab">Produk</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#transaksi" data-toggle="tab">Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#laporan" data-toggle="tab">Laporan</a>
        </li>
    </ul>

    <div class="tab-content mt-3">
        <!-- Daftar Barang -->
        <div class="tab-pane fade show active" id="barang">
            <h2>Daftar Barang</h2>
            <a href="{{ route('barangs.create') }}" class="btn btn-primary">Tambah Barang</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Jenis Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->id_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->stok_barang }}</td>
                        <td>{{ $barang->jenis_barang }}</td>
                        <td>
                            <a href="{{ route('barangs.edit', $barang) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barangs.destroy', $barang) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Barang Masuk -->
        <div class="tab-pane fade" id="barangMasuk">
            <h2>Barang Masuk</h2>
            <a href="{{ route('barangMasuk.create') }}" class="btn btn-primary">Tambah Barang Masuk</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Barang Masuk</th>
                        <th>ID Barang</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangMasuks as $barangMasuk)
                    <tr>
                        <td>{{ $barangMasuk->id_barang_masuk }}</td>
                        <td>{{ $barangMasuk->id_barang }}</td>
                        <td>{{ $barangMasuk->tanggal }}</td>
                        <td>{{ $barangMasuk->jumlah }}</td>
                        <td>
                            <a href="{{ route('barangMasuk.edit', $barangMasuk) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barangMasuk.destroy', $barangMasuk) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Barang Keluar -->
        <div class="tab-pane fade" id="barangKeluar">
            <h2>Barang Keluar</h2>
            <a href="{{ route('barangKeluar.create') }}" class="btn btn-primary">Tambah Barang Keluar</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Barang Keluar</th>
                        <th>ID Barang</th>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangKeluars as $barangKeluar)
                    <tr>
                        <td>{{ $barangKeluar->id_barang_keluar }}</td>
                        <td>{{ $barangKeluar->id_barang }}</td>
                        <td>{{ $barangKeluar->tanggal }}</td>
                        <td>{{ $barangKeluar->jumlah }}</td>
                        <td>
                            <a href="{{ route('barangKeluar.edit', $barangKeluar) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barangKeluar.destroy', $barangKeluar) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Produk -->
<div class="tab-pane fade" id="produk">
    <h2>Daftar Produk</h2>
    <a href="{{ route('produks.create') }}" class="btn btn-primary">Tambah Produk</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produks as $produk)
            <tr>
                <td>{{ $produk->id_produk }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->harga }}</td>
                <td>
                    <a href="{{ route('produks.edit', $produk) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('produks.destroy', $produk) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


        <!-- Transaksi -->
        <div class="tab-pane fade" id="transaksi">
            <h2>Daftar Transaksi</h2>
            <a href="{{ route('transaksis.create') }}" class="btn btn-primary">Tambah Transaksi</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>ID Barang</th>
                        <th>ID Produk</th>
                        <th>Tanggal Transaksi</th>
                        <th>Harga Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id_transaksi }}</td>
                        <td>{{ $transaksi->id_barang }}</td>
                        <td>{{ $transaksi->id_produk }}</td>
                        <td>{{ $transaksi->tanggal_transaksi }}</td>
                        <td>{{ $transaksi->harga_total }}</td>
                        <td>
                            <a href="{{ route('transaksis.edit', $transaksi) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transaksis.destroy', $transaksi) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Laporan -->
        <div class="tab-pane fade" id="laporan">
            <h2>Laporan Penjualan</h2>
            <a href="{{ route('laporans.create') }}" class="btn btn-primary">Generate Laporan</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Laporan</th>
                        <th>Tanggal</th>
                        <th>Jumlah Penjualan</th>
                        <th>Pendapatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laporans as $laporan)
                    <tr>
                        <td>{{ $laporan->id_laporan }}</td>
                        <td>{{ $laporan->tanggal }}</td>
                        <td>{{ $laporan->jumlah_penjualan }}</td>
                        <td>{{ $laporan->pendapatan }}</td>
                        <td>
                            <a href="{{ route('laporans.edit', $laporan) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('laporans.destroy', $laporan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
