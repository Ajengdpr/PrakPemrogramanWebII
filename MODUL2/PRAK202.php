<?php
$pesanNama = $pesanNim = $result = $pesanJK="";
$nama = $nim = $jenisk = "";

if (isset($_POST['submit'])){
    if (empty($_POST['nama'])){
        $pesanNama = "Nama tidak boleh kosong";
    } else {
        $nama = cek_input($_POST['nama']);
    }
    if (empty($_POST['nim'])){
        $pesanNim = "Nim tidak boleh kosong"; 
    } else {
        $nim = cek_input($_POST['nim']); 
    }
    if (empty($_POST['jenisk'])){
        $pesanJK = "Jenis kelamin tidak boleh kosong"; 
    } else {
        $jenisk = cek_input($_POST['jenisk']); 
    }
}

function cek_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak202 - Menampilkan pesan error</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form method="POST">
        Nama:<input type="text" name="nama" value="<?= $nama ?>"><span class="error">* <?= $pesanNama;?></span><br>
        NIM :<input type="text" name="nim" value="<?= $nim ?>"><span class="error">* <?= $pesanNim;?></span><br>
        Jenis kelamin :<span class="error">* <?= $pesanJK;?></span><br>
        <input type="radio" name="jenisk" value="Laki-Laki">Laki-Laki<br>
        <input type="radio" name="jenisk" value="Perempuan">Perempuan<br>
         <input type="submit" name="submit" value="Submit">
    </form><br>
    <?php
    if (!empty($nama) && !empty($nim) && !empty($jenisk)){
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jenisk <br>";
    }
    ?>
</body>
</html>