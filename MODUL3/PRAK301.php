<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301 - Cetak Output Peserta</title>
    <style>
        .merah {
            color: red;
        }
        .hijau {
            color: green;
        }
    </style>
</head>
<body>
<form method="post">
    Jumlah Peserta: <input type="number" name="jumlah_peserta" required> </br>
    <button type="submit" name="cetak">Cetak</button> </br>
</form>
<?php
if (isset($_POST['cetak'])) {
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $counter = 1;
    while ($counter <= $jumlah_peserta) {
        $kelas_css = ($counter % 2 == 0) ? 'hijau' : 'merah';
        echo "<p class='$kelas_css'>Peserta ke-$counter</p>";

        $counter++;
    }
}
?>
</body>
</html>