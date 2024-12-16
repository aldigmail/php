<?php
// menghubungkan file config dengan index
include("../koneksi.php");
session_start(); // Mulai sesi
?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Film</title>
    <style>
        /* membuat styling pada table*/
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>


<body>
    <h2>Data Film</h2>
            <!-- Tampilkan Notifikasi Jika Ada -->
        <?php if (isset($_SESSION['notifikasi'])): ?> 
            <p><?php echo $_SESSION['notifikasi']; ?></p>
            <!-- Hapus notifikasi setelah ditampilkan -->
            <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
            <thead>
                <tr align="center">
                    <th>#</th>
                    <th>Judul film</th>
                    <th>Genre</th>
                        <th>Durasi</th>
                            <th><a href="tambah_film.php">Tambah Data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; 
                $query = $db->query("SELECT * FROM film");
                while ($film = $query->fetch_assoc()) {
                    /* fungsi fetch_assoc digunakan untuk mengambil data perulangan dalam bentuk array */
                ?> <!-- kode PHP ditutup untuk menyisipkan kode HTML yang akan di looping menggunakan while loop -->
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $film['judul_film'] ?></td>
                        <td><?php echo $film['genre'] ?></td>
                        <td><?php echo $film['durasi'] ?></td>
                        <td align="center">
                            <!-- URL ke halaman edit data dengan menggunakan parameter id pada kolom table -->
                            <a href="edit_film.php?id=<?php echo $film['film_id'] ?>">Edit</a>
                            <!-- URL untuk menghapus data dengan menggunakan parameter id
pada kolom table dan alert confirmasi hapus data-->
                            <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus.php?id=<?php echo $film['film_id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                } /* Mengakhiri proses perulangan while yang dimulai pada baris 48 */
                ?>
            </tbody>
        </table>
        <!-- Menghitung jumlah baris yang ada pada table (calon_siswa) -->
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>

</html>
</tbody>