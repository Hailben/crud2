<?php
$koneksi = new mysqli('localhost', 'root', '', 'bennett_xipplg2') or die(mysqli_error($koneksi));

// Menyimpan data
if (isset($_POST['simpan'])) {
    $idDokter = $_POST['idDokter'];
    $nmDokter = $_POST['nmDokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $noTelp = $_POST['noTelp'];
    $koneksi->query("INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) VALUES ('$idDokter', '$nmDokter', '$spesialisasi', '$noTelp')");
    header('Location: dokter.php');
    exit();
}

// Menghapus data
if (isset($_GET['delete'])) {
    $idDokter = $_GET['delete'];
    $koneksi->query("DELETE FROM dokter WHERE idDokter = '$idDokter'");
    header("Location: dokter.php");
    exit();
}

// Mengedit data
if (isset($_POST['update'])) {
    $idDokter = $_POST['idDokter'];
    $nmDokter = $_POST['nmDokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $noTelp = $_POST['noTelp'];
    $koneksi->query("UPDATE dokter SET nmDokter='$nmDokter', spesialisasi='$spesialisasi', noTelp='$noTelp' WHERE idDokter='$idDokter'");
    header("Location: dokter.php");
    exit();
}
?>
