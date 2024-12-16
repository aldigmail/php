<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Penayangan</title>
</head>
<body>
    <h3>Tambah Data Penayangan</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Film</td>
                <td><input type="text" name="nama_film" required></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td><input type="time" name="waktu" required></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td> <input type="date" name="tanggal" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>