<?php 
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $Idpenayangan = $_POST['penayangan_id'];
    $namaFilm = $_POST['nama_film'];
    $waktu = $_POST['waktu'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE penayangan SET 
    nama_film='$namaFilm',
    waktu='$waktu',
    tanggal='$tanggal'
    WHERE penayangan_id=$Idpenayangan";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data Penayangan berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data Penayangan gagal di perbarui";
    }

    header('Location: index.php');
} else {
    die("Akses Ditolak...");
}
?>