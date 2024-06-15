<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak203 - Konversi Suhu</title>
</head>
<body>
<form method="post">
    Nilai :<input type="number" name="suhu"></input></br>
    Dari : </br>
    <input type="radio" name="darisuhu" value="Celcius">Celcius</br>
    <input type="radio" name="darisuhu" value="Fahrenheit">Fahrenheit</br>
    <input type="radio" name="darisuhu" value="Reamur">Reamur</br>
    <input type="radio" name="darisuhu" value="Kelvin">Kelvin</br>
    Ke : </br>
    <input type="radio" name="kesuhu" value="Celcius">Celcius</br>
    <input type="radio" name="kesuhu" value="Fahrenheit">Fahrenheit</br>
    <input type="radio" name="kesuhu" value="Reamur">Reamur</br>
    <input type="radio" name="kesuhu" value="Kelvin">Kelvin</br>
    <input type="submit" name="submit" value="Konversi"></br>
</form></br>
</body>
</html>
<?php
    if (isset($_POST['submit'])){
        $suhu = $_POST['suhu'];
        $darisuhu = $_POST['darisuhu'];
        $kesuhu = $_POST['kesuhu'];

        if ($darisuhu == "Celcius"){
           if ($kesuhu == "Celcius") {
                echo "<h2>Hasil Konversi : $suhu &deg;C</h2>" ;
            } elseif ($kesuhu == "Fahrenheit") {
                $hasil = ($suhu * 9/5) + 32;
                echo "<h2>Hasil Konversi : $hasil &deg;F</h2>";
            } elseif ($kesuhu == "Reamur") {
                $hasil = $suhu * 4/5;
                echo "<h2>Hasil Konversi : $hasil &deg;R</h2>";
            } elseif ($kesuhu == "Kelvin") {
                $hasil = $suhu + 273.15;
                echo "<h2>Hasil Konversi : $hasil K</h2>";
            }
        } elseif ($darisuhu == "Reamur"){
            if ($kesuhu == "Celcius") {
                $hasil = $suhu * 5/4;
                echo "<h2>Hasil Konversi : $hasil &deg;C</h2>";
            } elseif ($kesuhu == "Fahrenheit") {
                $hasil = ($suhu * 9/4) + 32;
                echo "<h2>Hasil Konversi : $hasil &deg;F</h2>";
            } elseif ($kesuhu == "Reamur") {
                echo "<h2>Hasil Konversi : $suhu &deg;R</h2>";
            } elseif ($kesuhu == "Kelvin") {
                $hasil = ($suhu * 5/4) + 273.15;
                echo "<h2>Hasil Konversi : $hasil K</h2>";
            }
        } elseif ($darisuhu == "Kelvin"){
            if ($kesuhu == "Celcius") {
                $hasil = $suhu - 273.15;
                echo "<h2>Hasil Konversi : $hasil &deg;C</h2>";
            } elseif ($kesuhu == "Fahrenheit") {
                $hasil = ($suhu * 9/5) - 459.67;
                echo "<h2>Hasil Konversi : $hasil &deg;F</h2>";
            } elseif ($kesuhu == "Reamur") {
                $hasil = ($suhu - 273.15) * 4/5;
                echo "<h2>Hasil Konversi : $hasil &deg;R</h2>";
            } elseif ($kesuhu == "Kelvin") {
                echo "<h2>Hasil Konversi : $suhu K</h2>";
            }
        }
    }
?>
</body>
</html>