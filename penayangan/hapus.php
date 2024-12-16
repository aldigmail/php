<?php
session_start();
include("../koneksi.php");

if (isset($_GET['id'])) {
    $IdPenayangan = $_GET['id'];

    $sql = "DELETE FROM penayangan WHERE penayangan_id=$IdPenayangan";
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