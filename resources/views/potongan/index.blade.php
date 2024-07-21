<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <style>
      body {
            background-color: #f8f8f8;
            font-family: Anonymous Pro, Anonymous Pro;
        }
        .sidebar {
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #f8f8f8;
            padding: 20px;
            border-right: 1px solid #ccc;
        }
        .sidebar h2 {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }
        .sidebar p {
            font-size: 14px;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            color: #333;
            text-decoration: none;
            background-color: #fff;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .sidebar a:hover {
            background-color: #f2f2f2;
        }
        .main-content {
            margin-left: 220px;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
            min-height: 100vh;
        }
        .main-content h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .main-content .search-container {
            margin-bottom: 20px;
        }
        .main-content .search-container input {
            padding: 8px;
            font-size: 14px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .main-content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .main-content table th, .main-content table td {
            padding: 10px;
            background-color: #ffffff;
            text-align: left;
        }
        .main-content table th {
            background-color: #ebebeb;
        }
        .main-content button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }
        .main-content button.edit {
            background-color: #80d1ff;
            color: white;
        }
        .main-content button.delete {
            background-color: #f37a7a;
            color: white;
        }
            .main-content .add-button-container {
    position: absolute;
    top: 20px;
    right: 20px;
}

        .main-content button.add {
            background-color: #80D1FF;
            color: white;
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .main-content .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        .main-content .pagination button {
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            margin: 0 5px;
        }
        .header .search-container {
            margin-top: 20px;
        }
        .header .search-container input {
            padding: 8px;
            font-size: 14px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .table-container {
            background-color: #27476d;
            padding: 20px;
          
            box-shadow: 0 0 100px rgba(0, 0, 0, 0.1);
            margin-top: 21px;
            min-height: 700px; /* Adjust this height as needed */
        }
        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-container table th, .table-container table td {
            padding: 10px;
            background-color: #ffffff;
            text-align: left;
            border: 1px solid #ddd;
        }
        .table-container table th {
            background-color: #ebebeb;
        }
        .table-container button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }
        .table-container button.edit {
            background-color: #80d1ff;
            color: white;
        }
        .table-container button.delete {
            background-color: #f37a7a;
            color: white;
        }
        .table-container button.add {
            background-color: #80d1ff;
            color: white;
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .table-container .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }
        .table-container .pagination button {
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            margin: 0 5px;
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
        <a href="{{ route('logout') }}">Log Out</a>
    </div>
    <div class="main-content">
    <h1>Data Potongan</h1>
    <div class="top-bar">
    </div>
    <div class="table-container">
        <form method="GET" action="{{ url('potongan') }}">
    <select id="cabangFilter" name="cabang" onchange="this.form.submit()">
        <option value="semua" {{ $selectedCabang == 'semua' ? 'selected' : '' }}>Semua</option>
        <option value="Sanankulon" {{ $selectedCabang == 'Sanankulon' ? 'selected' : '' }}>Sanankulon</option>
        <option value="Ponggok" {{ $selectedCabang == 'Ponggok' ? 'selected' : '' }}>Ponggok</option>
        <option value="Wonodadi" {{ $selectedCabang == 'Wonodadi' ? 'selected' : '' }}>Wonodadi</option>
        <option value="Kademangan" {{ $selectedCabang == 'Kademangan' ? 'selected' : '' }}>Kademangan</option>
        <option value="Srengat" {{ $selectedCabang == 'Srengat' ? 'selected' : '' }}>Srengat</option>
    </select>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Potongan</th>
                    <th>Jumlah</th>
                    <th>Total Potongan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($potongans as $item)
                <tr>
                    <td>{{ $item->karyawan->nama }}</td>
                    <td>{{ $item->potongan }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->jumlah * 5000}}</td>
                    <td>
                        <form action="{{ route('potongan.edit', $item->id) }}" method="GET" style="display:inline;">
                    <button type="submit" class="edit">Edit</button>
                </form>
                <form action="{{ route('potongan.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete">Delete</button>
                </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </div>
    </div>
</body>
</html>
