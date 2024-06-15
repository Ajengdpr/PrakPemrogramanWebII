<?php
$ListSamsung = [ 'S22' => 'Samsung Galaxy S22', 'S22+' =>'Samsung Galaxy S22+', 'A03' => 'Samsung Galaxy A03', 'X5' => 'Samsung Galaxy Xcover5']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak-105</title>
    <style>
        .Samsung {
            font-weight: 800;
            background-color: red;
            padding: 20px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td class="Samsung"> Daftar Smartphone Samsung</td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['S22']; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['S22+']; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['A03']; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['X5']; ?></td>
        </tr>
    </table>
</body>
</html>