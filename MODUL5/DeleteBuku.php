<?php
// DeleteBuku.php
require 'Model.php';

$id_buku = $_GET['id'];
$result = deleteBuku($id_buku);

echo $result;
?>