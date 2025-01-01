@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Beranda - Java Juice</h1>

    <div class="row mb-4">
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card bg-success text-white">
            <div class="card-body">
            <h5 class="card-title">Total Barang</h5>
            <h2 class="card-text">{{ $totalBarang }}</h2> <!-- Menampilkan nilai $totalBarang -->
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h5 class="card-title">Barang Masuk</h5>
                    <h2 class="card-text">{{ $totalBarangMasuk }}</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <h5 class="card-title">Barang Keluar</h5>
                    <h2 class="card-text">{{ $totalBarangKeluar }}</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">Stok Minim</h5>
                    <h2 class="card-text">{{ $stokMinim }}</h2>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mb-4">Grafik Barang Masuk dan Keluar</h2>
    <canvas id="myChart"></canvas>

    <h2 class="mt-5 mb-4">Daftar Barang</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->id }}</td>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->kategori }}</td>
                <td>{{ $barang->jumlah }}</td>
                <td><a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Script untuk grafik -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
            datasets: [{
                label: 'Barang Masuk',
                data: [10, 15, 20, 25], // Ganti dengan data yang sesuai
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
            }, {
                label: 'Barang Keluar',
                data: [5, 8, 10, 12], // Ganti dengan data yang sesuai
                backgroundColor: 'rgba(255, 99, 132, 0.6)',
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
