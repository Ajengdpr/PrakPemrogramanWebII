<!DOCTYPE html>
<html>
<head>
    <title>PRAK302 - Segitiga dari Gambar</title>
</head>
<body>
<form action= "" method="post">
    Tinggi segitiga: <input type="number" name="tinggi"><br>
    Alamat Gambar: <input type="text" name="url_gambar"><br>
    <button type="submit" name="tampilkan">Submit</button>
</form>
<?php
if (isset($_POST['tampilkan'])) {
    $tinggi = $_POST['tinggi'];
    $url_gambar = $_POST['url_gambar'];
    $i=0;
    while ($i<$tinggi) {
        $j = 0;
        while ($j<$i) {
            echo "&nbsp ";
            $j++;
        }
        $j=1; // Ubah nilai awal j menjadi 1
        while ($j <= $tinggi-$i) { // Ubah kondisi menjadi <=
            echo "<img src='$url_gambar' width='10px' height='10px'>";
            $j++;
        }
        $i++;
        echo "<br>";
    }
}
?>

</body>
</html>