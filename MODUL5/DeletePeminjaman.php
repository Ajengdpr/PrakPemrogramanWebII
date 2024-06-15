<?php
// DeletePeminjaman.php
require 'Model.php';

$id_peminjam = $_GET['id'];
$result = deletePeminjaman($id_peminjam);

echo $result;
?>