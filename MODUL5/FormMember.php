<?php
require 'Model.php';

$id_member = isset($_GET['id']) ? $_GET['id'] : '';
$member = null;
if ($id_member) {
    $member = getMemberById($id_member);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_member = $_POST['id_member'];
    $nama_member = $_POST['nama_member'];
    $nomor_member = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    if ($id_member) {
        $result = updateMember($id_member, $nama_member, $nomor_member, $alamat, $tgl_terakhir_bayar);
    } else {
        $result = insertMember($nama_member, $nomor_member, $alamat, $tgl_mendaftar, $tgl_terakhir_bayar);
    }

    echo $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
</head>
<body>
    <h1>Form Member</h1>
    <form method="POST" action="">
        <input type="hidden" name="id_member" value="<?= $member['id_member'] ?? '' ?>">
        <label for="nama_member">Nama Member:</label>
        <input type="text" name="nama_member" value="<?= $member['nama_member'] ?? '' ?>" required><br>
        <label for="nomor_member">Nomor Member:</label>
        <input type="text" name="nomor_member" value="<?= $member['nomor_member'] ?? '' ?>" required><br>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required><?= $member['alamat'] ?? '' ?></textarea><br>
        <label for="tgl_mendaftar">Tanggal Mendaftar:</label>
        <input type="date" name="tgl_mendaftar" value="<?= isset($member['tgl_mendaftar']) ? date('Y-m-d',($member['tgl_mendaftar'])) : '' ?>" required><br>
        <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar:</label>
        <input type="date" name="tgl_terakhir_bayar" value="<?= $member['tgl_terakhir_bayar'] ?? '' ?>" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>