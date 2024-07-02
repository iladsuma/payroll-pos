<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
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
        .main-content form {
            max-width: 600px;
        }
        .main-content form label {
            display: block;
            margin-bottom: 5px;
        }
        .main-content form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .main-content form button {
            padding: 10px 15px;
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
        <a href="{{ url('karyawan') }}">Data Karyawan</a>
        <a href="#">Pengiriman</a>
        <a href="#">Potongan</a>
        <a href="#">Insentif Gaji</a>
        <a href="#">Laporan Gaji</a>
        <a href="#">Settings</a>
        <a href="#">Log Out</a>
    </div>
    <div class="main-content">
        <h1>Edit Karyawan</h1>
        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
            @csrf
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" value="{{ $karyawan->nama }}">
            
            <label for="bulan">Bulan</label>
            <input type="text" id="bulan" name="bulan" value="{{ $karyawan->bulan }}">
            
            <label for="gaji_pokok">Gaji Pokok</label>
            <input type="text" id="gaji_pokok" name="gaji_pokok" value="{{ $karyawan->gaji_pokok }}">
            
            <label for="intensif">Intensif</label>
            <input type="text" id="intensif" name="intensif" value="{{ $karyawan->intensif }}">
            
            <label for="potongan">Potongan</label>
            <input type="text" id="potongan" name="potongan" value="{{ $karyawan->potongan }}">
            
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
