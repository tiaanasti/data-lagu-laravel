<!DOCTYPE html>
<html>
<head>
    <title>Detail Lagu</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Detail Lagu</h4>
        </div>

        <div class="card-body">
            <p><strong>Judul:</strong> {{ $lagu->judul }}</p>
            <p><strong>Penyanyi:</strong> {{ $lagu->penyanyi }}</p>
            <p><strong>Genre:</strong> {{ $lagu->genre }}</p>
            <p><strong>Tahun:</strong> {{ $lagu->tahun_rilis }}</p>
            <p><strong>Deskripsi:</strong><br> {{ $lagu->deskripsi }}</p>
        </div>

        <div class="card-footer text-end">
            <a href="/lagu" class="btn btn-secondary">← Kembali</a>
        </div>
    </div>

</div>

</body>
</html>