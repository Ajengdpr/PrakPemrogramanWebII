<!DOCTYPE html>
<html>
<head>
    <title>Prak402 - Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<?php
// Data mahasiswa
$students = [
    [
        "Nama" => "Andi",
        "NIM" => "2101001",
        "Nilai UTS" => 87,
        "Nilai UAS" => 65
    ],
    [
        "Nama" => "Budi",
        "NIM" => "2101002",
        "Nilai UTS" => 76,
        "Nilai UAS" => 79
    ],
    [
        "Nama" => "Tono",
        "NIM" => "2101003",
        "Nilai UTS" => 50,
        "Nilai UAS" => 41
    ],
    [
        "Nama" => "Jessica",
        "NIM" => "2101004",
        "Nilai UTS" => 60,
        "Nilai UAS" => 75
    ]
];

// Menampilkan data mahasiswa dalam bentuk tabel
if (!empty($students)) {
    echo "<table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>";

    foreach ($students as $student) {
        $nilaiAkhir = 0.4 * $student["Nilai UTS"] + 0.6 * $student["Nilai UAS"];
        $huruf = 'E'; // Default value

        if ($nilaiAkhir >= 80) {
            $huruf = 'A';
        } elseif ($nilaiAkhir >= 70) {
            $huruf = 'B';
        } elseif ($nilaiAkhir >= 60) {
            $huruf = 'C';
        } elseif ($nilaiAkhir >= 50) {
            $huruf = 'D';
        }

        echo "<tr>
                <td>" . htmlspecialchars($student['Nama']) . "</td>
                <td>" . htmlspecialchars($student['NIM']) . "</td>
                <td>" . $student['Nilai UTS'] . "</td>
                <td>" . $student['Nilai UAS'] . "</td>
                <td>" . number_format($nilaiAkhir, 1) . "</td>
                <td>" . $huruf . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Tidak ada data mahasiswa yang tersedia.</p>";
}
?>
</body>
</html>