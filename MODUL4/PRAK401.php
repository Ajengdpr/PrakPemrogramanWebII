<!DOCTYPE html>
<html>
<head>
    <title>Prak401 - Matriks</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<form method="post">
    <label for="panjang">Panjang:</label>
    <input type="number" id="panjang" name="panjang" required><br><br>

    <label for="lebar">Lebar:</label>
    <input type="number" id="lebar" name="lebar" required><br><br>

    <label for="nilai">Nilai:</label>
    <input type="text" id="nilai" name="nilai" required><br><br>

    <input type="submit" name="submit" value="Cetak">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = intval($_POST["panjang"]);
    $lebar = intval($_POST["lebar"]);
    $nilai = explode(" ", $_POST["nilai"]);

    if (count($nilai) != $panjang * $lebar) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else {
        echo "<br><table>";

        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                echo "<td>" . $nilai[$i * $lebar + $j] . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
}
?>
</body>
</html>