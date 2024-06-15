<?php
require 'Model.php';

$peminjaman = getAllPeminjaman();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman</title>
</head>
<body>
    <h1>Peminjaman</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Member</th>
            <th>ID Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Tindakan</th>
        </tr>
        <?php while($row = $peminjaman->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id_peminjam'] ?></td>
            <td><?= $row['id_member'] ?></td>
            <td><?= $row['id_buku'] ?></td>
            <td><?= $row['tgl_pinjam'] ?></td>
            <td><?= $row['tgl_kembali'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $row['id_peminjam'] ?>">Edit</a>
                <a href="DeletePeminjaman.php?id=<?= $row['id_peminjam'] ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="FormPeminjaman.php">Tambah peminjaman baru?</a>
</body>
</html>