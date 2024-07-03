<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
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
        <h1>Data Pengiriman Barang</h1>
        <form method="GET" action="{{ url('pengiriman') }}">
            <select id="cabangFilter" name="cabang" onchange="this.form.submit()">
                <option value="Sanan Kulon" {{ $selectedCabang == 'Sanan Kulon' ? 'selected' : '' }}>Sanan Kulon</option>
                <option value="Ponggok" {{ $selectedCabang == 'Ponggok' ? 'selected' : '' }}>Ponggok</option>
                <option value="Wonodadi" {{ $selectedCabang == 'Wonodadi' ? 'selected' : '' }}>Wonodadi</option>
                <option value="Kademangan" {{ $selectedCabang == 'Kademangan' ? 'selected' : '' }}>Kademangan</option>
                <option value="Srengat" {{ $selectedCabang == 'Srengat' ? 'selected' : '' }}>Srengat</option>
            </select>
        </form>
        <button class="add-data-btn" onclick="window.location.href='{{ route('pengiriman.create') }}'">Tambah Data</button>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Resi</th>
                    <th>Cabang</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Jumlah Barang yang Dikirim</th>
                    <th>Insentif</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengiriman as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->resi }}</td>
                    <td>{{ $item->cabang }}</td>
                    <td>{{ $item->tanggal_pengiriman }}</td>
                    <td>{{ $item->jumlah_pengiriman }}</td>
                    <td>{{ $item->insentif }}</td>
                    <td>
                        <button class="edit-btn" onclick="window.location.href='{{ route('pengiriman.edit', $item->id) }}'">Edit</button>
                        <form action="{{ route('pengiriman.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>