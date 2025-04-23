<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santy: Tugas Pertemuan 9</title>
    <!-- <style>
        table {
            border-collapse: collapse;
            width: 70%;
        }
        table, th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            font-size: 28px;
        }
    </style> -->
</head>
<body>
    <h2>Daftar Nilai Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>NAMA MAHASISWA</th>
            <th>NILAI</th>
            <th>KETERANGAN</th>
        </tr>

    <?php
    $mahasiswa = [
        ['npm' => '001', 'nama' => 'Chayra', 'nilai' => 80],
        ['npm' => '002', 'nama' => 'Archelia', 'nilai' => 75],
        ['npm' => '003', 'nama' => 'Lalan', 'nilai' => 50],
        ['npm' => '004', 'nama' => 'Fuji', 'nilai' => 90],
        ['npm' => '005', 'nama' => 'Rafa', 'nilai' => 60],
    ];

    $no = 1;
    foreach ($mahasiswa as $data) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $data['npm'] . "</td>";
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . $data['nilai'] . "</td>";

        $keterangan = ($data['nilai'] >= 70) ? "Lulus" : "Tidak Lulus";
        echo "<td>" . $keterangan . "</td>";

        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>