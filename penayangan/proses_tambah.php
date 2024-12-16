<?php
session_start(); // Mulai sesi
// Menghubungkan file dengan file konfigurasi database
include("../koneksi.php");

// Mengecek apakah tombol 'simpan' telah ditekan
if(isset($_POST['simpan'])){
    /* Mengambil nilai dari input data dan menyimpanya ke variabel */
    $namafilm = $_POST['nama_film'];
    $waktu = $_POST['waktu'];
    $tanggal =  $_POST['tanggal'];

    /* Menyusun query SQL untuk menambahkan data ke tabel karyawan */
    $sql = "INSERT INTO penayangan (nama_film, waktu, tanggal) VALUES ('$namafilm', '$waktu', '$tanggal')";

    // Menjalankan query dan menyimpan hasilnya dalam variabel $query
    $query = mysqli_query($db, $sql);

    // Simpan pesan di sesi
    if($query) {
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
} else {
    // Jika akses langsung tanpa form, tampilkan pesan eror
    die("Akses Ditolak...");
}
?>