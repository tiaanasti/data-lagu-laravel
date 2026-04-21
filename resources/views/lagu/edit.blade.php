<!DOCTYPE html>
<html>
<head>
    <title>Edit Lagu</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h4>Edit Lagu</h4>
        </div>

        <div class="card-body">

            <form action="/lagu/{{ $lagu->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $lagu->judul }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Penyanyi</label>
                    <input type="text" name="penyanyi" class="form-control" value="{{ $lagu->penyanyi }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Genre</label>
                    <input type="text" name="genre" class="form-control" value="{{ $lagu->genre }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Rilis</label>
                    <input type="number" name="tahun_rilis" class="form-control" value="{{ $lagu->tahun_rilis }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ $lagu->deskripsi }}</textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/lagu" class="btn btn-secondary">← Kembali</a>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>