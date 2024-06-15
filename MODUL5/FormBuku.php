<?php
require 'Model.php';

$id_buku = isset($_GET['id']) ? $_GET['id'] : '';
$buku = null;
if ($id_buku) {
    $buku = getBukuById($id_buku);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    if ($id_buku) {
        $result = updateBuku($id_buku, $judul_buku, $penulis, $penerbit, $tahun_terbit);
    } else {
        $result = insertBuku($judul_buku, $penulis, $penerbit, $tahun_terbit);
    }

    echo $result;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
</head>
<body>
    <h1>Form Buku</h1>
    <form method="POST" action="">
        <input type="hidden" name="id_buku" value="<?= $buku['id_buku'] ?? '' ?>">
        <label for="judul_buku">Judul Buku:</label>
        <input type="text" name="judul_buku" value="<?= $buku['judul_buku'] ?? '' ?>" required><br>
        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" value="<?= $buku['penulis'] ?? '' ?>" required><br>
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" value="<?= $buku['penerbit'] ?? '' ?>" required><br>
        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?? '' ?>" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>