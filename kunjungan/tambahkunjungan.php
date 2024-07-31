<html>
<head>
<title>My App | Halaman Utama</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Tambah Data Kunjungan</h3>
<form action="koneksi1.php" method="POST">
<div class="form-group">
<label for="idKunjungan">ID Kunjungan</label>
<input type="text" class="form-control mb-3" name="idKunjungan" placeholder="ID Kunjungan"> </div>
<div class="form-group">
<label for="idDokter">ID Dokter</label>
<input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter">
</div>
<div class="form-group">
<label for="idPasien">ID Pasien</label>
<input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
</div>
</div>
<div class="form-group mt-3">
<label for="keluhan">Keluhan</label>
<textarea name="keluhan" id="keluhan" cols="5" rows="3" placeholder="Keluhan" class="form-control"></textarea>
</div>
<div class="form-group mt-3">
<label for="tanggal">Tanggal</label>
<input type="date" name="tanggal" id="tanggal" cols="5" rows="3" placeholder="tanggal" class="form-control"></input>
</div>
<div class="form-group mt-3">
<input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
</div>
</form>
</div>
</div>
</div>
</body>
</html>