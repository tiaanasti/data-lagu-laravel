<!DOCTYPE html>
<html>
<head>
    <title>Data Lagu</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Data Lagu</h2>

    <a href="/lagu/create" class="btn btn-primary mb-3">+ Tambah Lagu</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Judul</th>
                <th>Penyanyi</th>
                <th width="250">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lagu as $l)
            <tr>
                <td>{{ $l->judul }}</td>
                <td>{{ $l->penyanyi }}</td>
                <td>
                    <a href="/lagu/{{ $l->id }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/lagu/{{ $l->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/lagu/{{ $l->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah kamu yakin ingin menghapus?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>