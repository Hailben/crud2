<?php
$koneksi = new mysqli('localhost', 'root', '', 'bennett_xipplg2');

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// Menyimpan data
if (isset($_POST['simpan'])) {
    $idKunjungan = $_POST['idKunjungan'];
    $idDokter = $_POST['idDokter'];
    $idPasien = $_POST['idPasien'];
    $keluhan = $_POST['keluhan'];
    $tanggal = $_POST['tanggal'];
    $koneksi->query("INSERT INTO kunjungan (idKunjungan, idDokter, idPasien, keluhan, tanggal) VALUES ('$idKunjungan', '$idDokter', '$idPasien', '$keluhan', '$tanggal')");
    header('Location: idkunjungan.php');
    exit();
}

// Menghapus data
if (isset($_GET['delete'])) {
    $idKunjungan = $_GET['delete'];
    $koneksi->query("DELETE FROM kunjungan WHERE idKunjungan = '$idKunjungan'");
    header("Location: idkunjungan.php");
    exit();
}

// Mengedit data
if (isset($_POST['update'])) {
    $idKunjungan = $_POST['idKunjungan'];
    $idDokter = $_POST['idDokter'];
    $idPasien = $_POST['idPasien'];
    $keluhan = $_POST['keluhan'];
    $tanggal = $_POST['tanggal'];
    $koneksi->query("UPDATE kunjungan SET idKunjungan='$idKunjungan', idDokter='$idDokter', idPasien='$idPasien', keluhan='$keluhan', tanggal='$tanggal' WHERE idKunjungan='$idKunjungan'");
    header("Location: idkunjungan.php");
    exit();
}
?>
