<?php
require 'Model.php';

$id_peminjam = isset($_GET['id']) ? $_GET['id'] : '';
$peminjaman = null;
if ($id_peminjam) {
    $peminjaman = getPeminjamanById($id_peminjam);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_peminjam = $_POST['id_peminjam'];
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if ($id_peminjam) {
        $result = updatePeminjaman($id_peminjam, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    } else {
        $result = insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    }

    echo $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
</head>
<body>
    <h1>Form Peminjaman</h1>
    <form method="POST" action="">
        <input type="hidden" name="id_peminjam" value="<?= $peminjaman['id_peminjam'] ?? '' ?>">
        <label for="id_member">ID Member:</label>
        <input type="text" name="id_member" value="<?= $peminjaman['id_member'] ?? '' ?>" required><br>
        <label for="id_buku">ID Buku:</label>
        <input type="text" name="id_buku" value="<?= $peminjaman['id_buku'] ?? '' ?>" required><br>
        <label for="tgl_pinjam">Tanggal Pinjam:</label>
        <input type="date" name="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'] ?? '' ?>" required><br>
        <label for="tgl_kembali">Tanggal Kembali:</label>
        <input type="date" name="tgl_kembali" value="<?= $peminjaman['tgl_kembali'] ?? '' ?>" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>