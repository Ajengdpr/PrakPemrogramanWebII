<!DOCTYPE html>
<html>
<head>
    <title>Prak403 - Revisi KRS</title>
<?php
$students = [
    [
        "No" => 1,
        "Nama" => "Ridho",
        "MataKuliah" => [
            ["Nama" => "Pemrograman I", "SKS" => 2],
            ["Nama" => "Praktikum Pemrograman I", "SKS" => 1],
            ["Nama" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2],
            ["Nama" => "Arsitektur Komputer", "SKS" => 3]
        ]
    ],
    [
        "No" => 2,
        "Nama" => "Ratna",
        "MataKuliah" => [
            ["Nama" => "Basis Data I", "SKS" => 2],
            ["Nama" => "Praktikum Basis Data I", "SKS" => 1],
            ["Nama" => "Kalkulus", "SKS" => 3]
        ]
    ],
    [
        "No" => 3,
        "Nama" => "Tono",
        "MataKuliah" => [
            ["Nama" => "Rekayasa Perangkat Lunak", "SKS" => 3],
            ["Nama" => "Analisis dan Perancangan Sistem", "SKS" => 3],
            ["Nama" => "Komputasi Awan", "SKS" => 3],
            ["Nama" => "Kecerdasan Bisnis", "SKS" => 3]
        ]
    ]
];

// Menghitung Total SKS dan Menambahkan Keterangan
foreach ($students as &$student) {
    $totalSKS = 0;
    foreach ($student['MataKuliah'] as $matkul) {
        $totalSKS += $matkul['SKS'];
    }
    $student['TotalSKS'] = $totalSKS;
    $student['Keterangan'] = $totalSKS < 7 ? 'Revisi KRS' : 'Tidak Revisi';
}
unset($student);

// Cetak Header Tabel
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
      </tr>";

foreach ($students as $student) {
    $rowspan = count($student['MataKuliah']);

    foreach ($student['MataKuliah'] as $index => $matkul) {
        echo "<tr>";
        if ($index === 0) {
            echo "<td rowspan='$rowspan'>{$student['No']}</td>";
            echo "<td rowspan='$rowspan'>{$student['Nama']}</td>";
            echo "<td>{$matkul['Nama']}</td>";
            echo "<td>{$matkul['SKS']}</td>";
            if ($index === 0) {
                echo "<td rowspan='$rowspan'>{$student['TotalSKS']}</td>";
                echo "<td rowspan='$rowspan' style='background-color: " . ($student['Keterangan'] == 'Revisi KRS' ? 'red' : 'green') . ";'>{$student['Keterangan']}</td>";
            }
        } else {
            echo "<td>{$matkul['Nama']}</td>";
            echo "<td>{$matkul['SKS']}</td>";
        }
        echo "</tr>";
    }
}

echo "</table>";
?>
</body>
</html>