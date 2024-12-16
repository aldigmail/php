<?php
session_start();
include("../koneksi.php");

if (isset($_GET['id'])) {
    $Idfilm = $_GET['id'];

    $sql = "DELETE FROM film WHERE film_id=$Idfilm";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data Berhasil Dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data Gagal Dihapus!";
    }

    header('Location: index.php');
} else {
    die("Akses Ditolak....");
}
?>