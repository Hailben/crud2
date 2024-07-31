<?php
$koneksi = new mysqli('localhost', 'root', '', 'bennett_xipplg2') or die(mysqli_error($koneksi));

// Menyimpan data
if (isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES ('$idPasien', '$nmPasien', '$jk', '$alamat')");
    header('Location: pasien.php');
    exit();
}

// Menghapus data
if (isset($_GET['delete'])) {
    $idPasien = $_GET['delete'];
    $koneksi->query("DELETE FROM pasien WHERE idPasien = '$idPasien'");
    header("Location: pasien.php");
    exit();
}

// Mengedit data
if (isset($_POST['update'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("UPDATE pasien SET nmPasien='$nmPasien', jk='$jk', alamat='$alamat' WHERE idPasien='$idPasien'");
    header("Location: pasien.php");
    exit();
}
?>
