<?php
require 'Model.php';

$members = getAllMembers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Member</title>
</head>
<body>
    <h1>Data Member</h1>
    <table border="1">
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th>Tindakan</th>
        </tr>
        <?php while($row = $members->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id_member'] ?></td>
            <td><?= $row['nama_member'] ?></td>
            <td><?= $row['nomor_member'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['tgl_mendaftar'] ?></td>
            <td><?= $row['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="FormMember.php?id=<?= $row['id_member'] ?>">Edit</a>
                <a href="DeleteMember.php?id=<?= $row['id_member'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?');">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="FormMember.php">Tambah anggota baru?</a>
</body>
</html>