<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan Gaji</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            margin: 10px 0;
            color: #333;
            text-decoration: none;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
        }
        .main-content h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .main-content table {
            width: 100%;
            border-collapse: collapse;
            background-color: #0d3454;
            color: white;
        }
        .main-content table th, .main-content table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .main-content table th {
            background-color: #f2f2f2;
            color: black;
        }
        .main-content button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .main-content button.edit {
            background-color: #4caf50;
            color: white;
        }
        .main-content button.delete {
            background-color: #f44336;
            color: white;
        }
        .main-content .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .main-content .top-bar form {
            display: inline;
        }
        .main-content .top-bar select {
            padding: 5px;
            margin-right: 10px;
        }
        .main-content .top-bar .add-data-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Aplikasi Gaji Pos Indonesia</h2>
        <p>Dino Esza<br>Admin</p>
        <a href="{{ route('karyawan.index') }}">Data Karyawan</a>
        <a href="{{ route('pengiriman.index') }}">Pengiriman</a>
        <a href="{{ route('potongan.index') }}">Potongan</a>
        <a href="{{ route('insentif.index') }}">Insentif Gaji</a>
        <a href="{{ route('laporan.index') }}">Laporan Gaji</a>
        <a href="{{ route('settings.index') }}">Settings</a>
        <a href="#">Log Out</a>
    </div>
    <div class="main-content">
        <div class="top-bar">
            <h1>Data Laporan Gaji</h1>
            <form method="GET" action="{{ url('karyawan') }}">
                <select id="cabangFilter" name="cabang" onchange="this.form.submit()">
                    <option value="Sanan Kulon" {{ $selectedCabang == 'Sanan Kulon' ? 'selected' : '' }}>Sanan Kulon</option>
                    <option value="Ponggok" {{ $selectedCabang == 'Ponggok' ? 'selected' : '' }}>Ponggok</option>
                    <option value="Wonodadi" {{ $selectedCabang == 'Wonodadi' ? 'selected' : '' }}>Wonodadi</option>
                    <option value="Kademangan" {{ $selectedCabang == 'Kademangan' ? 'selected' : '' }}>Kademangan</option>
                    <option value="Srengat" {{ $selectedCabang == 'Srengat' ? 'selected' : '' }}>Srengat</option>
                </select>
            </form>
            <button class="add-data-btn" onclick="window.location.href='{{ route('karyawan.create') }}'">Tambah Data</button>
        </div>
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="employeeData">
                @foreach($karyawan as $employee)
                <tr>
                    <td>{{ $employee->nama }}</td>
                    <td>{{ $employee->cabang }}</td>
                    <td>{{ $employee->bulan }}</td>
                    <td>{{ $employee->gaji_pokok }}</td>
                    <td>{{ $employee->intensif }}</td>
                    <td>{{ $employee->potongan }}</td>
                    <td>{{ $employee->gaji_pokok + $employee->intensif - $employee->potongan }}</td>
                    <td>
                        <button class="edit">Edit</button>
                        <button class="delete">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
