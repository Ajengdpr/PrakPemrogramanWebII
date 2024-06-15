<?php
require 'Model.php';

$buku = getAllBuku();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buku</title>
</head>
<body>
    <h1>Buku</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Tindakan</th>
        </tr>
        <?php while($row = $buku->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id_buku'] ?></td>
            <td><?= $row['judul_buku'] ?></td>
            <td><?= $row['penulis'] ?></td>
            <td><?= $row['penerbit'] ?></td>
            <td><?= $row['tahun_terbit'] ?></td>
            <td>
                <a href="FormBuku.php?id=<?= $row['id_buku'] ?>">Edit</a>
                <a href="DeleteBuku.php?id=<?= $row['id_buku'] ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="FormBuku.php">Tambah buku baru?</a>
</body>
</html>