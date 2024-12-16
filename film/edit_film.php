<?php

include("../koneksi.php");

$Idfilm = $_GET['id'];

$query = $db->query("SELECT * FROM film WHERE film_id = '$Idfilm'");
$film = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Film</title>
</head>
<body>
    <h3>Edit Data Film</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="film_id" value="<?php echo $film ['film_id']; ?>">
        <table border="0">
            <tr>
                <td>Judul Film</td>
                <td>
                    <input type="text" name="judul_film" value="<?php echo $film ['judul_film']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <input type="text" name="genre" value="<?php echo $film['genre']; ?>"required>
                </td>
            </tr>
            <tr>
                <td>Durasi</td>
                <td>
                    <input type="text" name="durasi" value="<?php echo $film['durasi']; ?>"required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>