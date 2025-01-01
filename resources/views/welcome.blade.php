<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Java Juice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-4">Selamat Datang di Dashboard Java Juice</h1>
        <p class="lead">Klik tombol di bawah ini untuk mulai mengelola data barang.</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">Mulai</a>
    </div>
</body>
</html>
