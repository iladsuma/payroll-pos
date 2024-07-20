<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengiriman</title>
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
        <a href="{{ route('karyawan.index') }}">Data Karyawan</a>
        <a href="{{ route('pengiriman.index') }}">Pengiriman</a>
        <a href="{{ route('potongan.index') }}">Potongan</a>
        <a href="{{ route('laporan.index') }}">Laporan Gaji</a>
        <a href="{{ route('settings.index') }}">Settings</a>
        <a href="{{ route('logout') }}">Log Out</a>
    </div>
    <div class="main-content">
        <h1>Edit Potongan</h1>
        <form action="{{ route('potongan.update', $potongan->id) }}" method="POST">
        @csrf
    <div class="form-group">
    <label for="potongan">Potongan</label>
    <input type="text" id="potongan" name="potongan" value="{{ $potongan->potongan }}" required>
    </div>
    <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="text" id="jumlah" name="jumlah" value="{{ $potongan->jumlah}}" required>
    </div>
       
            <div class="form-group">
                <button type="submit">Simpan</button>
            </div>
        </form>
</body>
</html>
