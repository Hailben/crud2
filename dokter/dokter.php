<!DOCTYPE html>
<html>
<head>
    <title>My App | Halaman Kedua</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">My App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="page">Dokter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row mt-3">
        <div class="col-sm">
            <h3>Tabel Dokter</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="tambahdokter.php" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table table-striped table-hover table-sm">
                <tr>
                    <th>No</th>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Spesialisasi</th>
                    <th>No Telp</th>
                    <th>Action</th>
                </tr>
                <?php
                include 'koneksi1.php';
                $no = 1;
                $hasil = $koneksi->query("SELECT * FROM dokter");
                while ($row = $hasil->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['idDokter']; ?></td>
                    <td><?= $row['nmDokter']; ?></td>
                    <td><?= $row['spesialisasi']; ?></td>
                    <td><?= $row['noTelp']; ?></td>
                    <td>
                        <a href="editdokter.php?edit=<?= $row['idDokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="koneksi1.php?delete=<?= $row['idDokter']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
