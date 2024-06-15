<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak-102</title>
</head>
<body>
    <?php
    $jari_jari = 4.2;
    $tinggi = 5.4;
    $volume_tabung = M_PI * pow($jari_jari, 2) * $tinggi;
    echo number_format($volume_tabung, 3) . " m<sup>3</sup>";
    ?>
</body>
</html>