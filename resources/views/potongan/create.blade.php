<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Karyawan</h1>
        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="cabang">Cabang</label>
                <select id="cabang" name="cabang" required>
                    <option value="Sanan Kulon">Sanan Kulon</option>
                    <option value="Ponggok">Ponggok</option>
                    <option value="Wonodadi">Wonodadi</option>
                    <option value="Kademangan">Kademangan</option>
                    <option value="Srengat">Srengat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bulan">Bulan</label>
                <input type="text" id="bulan" name="bulan" required>
            </div>
            <div class="form-group">
                <label for="gaji_pokok">Gaji Pokok</label>
                <input type="number" id="gaji_pokok" name="gaji_pokok" required>
            </div>
            <div class="form-group">
                <label for="intensif">Intensif</label>
                <input type="number" id="intensif" name="intensif" required>
            </div>
            <div class="form-group">
                <label for="potongan">Potongan</label>
                <input type="number" id="potongan" name="potongan" required>
            </div>
            <div class="form-group">
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
