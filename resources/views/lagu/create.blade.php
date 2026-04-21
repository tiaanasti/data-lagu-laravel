<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lagu</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Tambah Lagu</h4>
        </div>

        <div class="card-body">

            <form action="/lagu" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan judul lagu" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Penyanyi</label>
                    <input type="text" name="penyanyi" class="form-control" placeholder="Masukkan penyanyi" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Genre</label>
                    <input type="text" name="genre" class="form-control" placeholder="Masukkan genre">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Rilis</label>
                    <input type="number" name="tahun_rilis" class="form-control" placeholder="Contoh: 2024">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi lagu"></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/lagu" class="btn btn-secondary">← Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>