<!DOCTYPE html>
<html>
<head>
    <title>PRAK303- Cek Bilangan Deret</title>
</head>
<body>
<form method="post">
    Batas bawah deret: <input type="number" name="batas_bawah" required><br>
    Batas atas deret: <input type="number" name="batas_atas" required><br>
    <button type="submit" name="cek">Cek</button>
</form>
<?php
if (isset($_POST['cek'])) {
    $batas_bawah = $_POST['batas_bawah'];
    $batas_atas = $_POST['batas_atas'];
    $gambar_bintang = "star.png";
    $bilangan = $batas_bawah;
    do {
        if (($bilangan + 7) % 5 == 0) {
            echo "<img src='$gambar_bintang' alt='*' width='20' height='20'> ";
        } else {
            echo "$bilangan ";
        }
        $bilangan++;
    } while ($bilangan <= $batas_atas);
}
?>

</body>
</html>