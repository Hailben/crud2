<!DOCTYPE html>
<html>
<head>
    <title>My App | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col-4">
            <h3>Edit Data Dokter</h3>
            <?php
            include 'koneksi1.php';
            // Use $koneksi instead of $koneksi1
            $panggil = $koneksi->query("SELECT * FROM dokter WHERE idDokter='$_GET[edit]'");
            while ($row = $panggil->fetch_assoc()) {
            ?>
            <form action="koneksi1.php" method="POST">
                <input type="hidden" name="action" value="update">
                <div class="form-group">
                    <label for="idDokter">ID Dokter</label>
                    <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter" value="<?= $row['idDokter'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nmDokter">Nama Dokter</label>
                    <input type="text" class="form-control mb-3" name="nmDokter" placeholder="Nama Dokter" value="<?= $row['nmDokter'] ?>">
                </div>
                <div class="form-group mt-3">
                    <label for="spesialisasi">Spesialisasi</label>
                    <textarea class="form-control mb-3" name="spesialisasi" id="spesialisasi" cols="5" rows="3" placeholder="spesialisasi"><?= $row['spesialisasi'] ?></textarea>
                </div> 
                <div class="form-group mt-3">
                    <label for="noTelp">No Telp</label>
                    <input type="number" class="form-control mb-3" name="noTelp" placeholder="Nomor Telepon" value="<?= $row['noTelp'] ?>">
                </div>
                <div class="form-group mt-3">
                    <input type="submit" name="update" value="Simpan" class="form-control btn btn-primary">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>
