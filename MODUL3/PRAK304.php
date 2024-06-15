<!DOCTYPE html>
<html>
<head>
    <title>PRAK304 - Program Bintang</title>
</head>
<body>

<?php
$star = 0; // Menginisialisasi jumlah bintang
$pict = "star.png";

if(isset($_POST['star'])){
    $star = $_POST['star'];
}
if(isset($_POST['tambah'])){
    $star++;
}
if(isset($_POST['kurang'])){
    $star--;
    $star = max(0, $star);
}
?>

<?php
for ($i = 0; $i < $star; $i++){
    echo '<img src="' . $pict . '" width="100" height="100">';
}
?>

<?php
if ($star == 0) :
?>

    <form action="" method="post">
        Jumlah bintang <input type="number" name="star" required><br>
        <button type="submit">Submit</button>
    </form>

<?php
elseif ($star != 0) :
?>

    <form action="" method="post">
        <button name="tambah">Tambah</button>
        <input type="hidden" name="star" value="<?= $star; ?>" />
        <button name="kurang">Kurang</button>
    </form>

<?php endif; ?>

</body>
</html>