<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Gaji</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Cabang</th>
                <th>Bulan</th>
                <th>Gaji Pokok</th>
                <th>Intensif</th>
                <th>Potongan</th>
                <th>Total Gaji</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporanGaji as $gaji)
                <tr>
                    <td>{{ $gaji->nama }}</td>
                    <td>{{ $gaji->cabang }}</td>
                    <td>{{ $gaji->bulan }}</td>
                    <td>{{ $gaji->gaji_pokok }}</td>
                    <td>{{ $gaji->intensif * 3000 }}</td>
                    <td>{{ $gaji->potongan * 5000 }}</td>
                    <td>{{ $gaji->gaji_pokok + $gaji->intensif * 3000 - $gaji->potongan * 5000 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
