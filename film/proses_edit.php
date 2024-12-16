<?php 
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {

    $Idfilm = $_POST['film_id'];
    $judulFilm = $_POST['judul_film'];
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'];

    $sql = "UPDATE film SET 
    judul_film='$judulFilm',
    genre='$genre',
    durasi='$durasi'
    WHERE film_id=$Idfilm";

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