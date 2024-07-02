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
        }
        .main-content table th, .main-content table td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        .main-content table th {
            background-color: #f2f2f2;
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
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Aplikasi Gaji Pos Indonesia</h2>
        <p>Dino Esza<br>Admin</p>
        <a href="#">Data Karyawan</a>
        <a href="#">Pengiriman</a>
        <a href="#">Potongan</a>
        <a href="#">Insentif Gaji</a>
        <a href="#">Laporan Gaji</a>
        <a href="#">Settings</a>
        <a href="#">Log Out</a>
    </div>
    <div class="main-content">
        <h1>Data Karyawan</h1>
        <select id="cabangFilter">
    <option value="Sanan Kulon">Sanan Kulon</option>
    <option value="Ponggok">Ponggok</option>
    <option value="Wonodadi">Wonodadi</option>
    <option value="Kademangan">Kademangan</option>
    <option value="Srengat" selected>Srengat</option>
</select>

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
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const cabangFilter = document.getElementById('cabangFilter');
        const fetchData = (cabang) => {
            fetch(`/karyawan?cabang=${cabang}`)
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('employeeData');
                    tbody.innerHTML = ''; // Clear the current table data
                    data.forEach(employee => {
                        const row = document.createElement('tr');
                        row.innerHTML = `
                            <td>${employee.nama}</td>
                            <td>${employee.bulan}</td>
                            <td>${employee.gaji_pokok}</td>
                            <td>${employee.intensif}</td>
                            <td>${employee.potongan}</td>
                            <td>${employee.gaji_pokok + employee.intensif - employee.potongan}</td>
                            <td>
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </td>
                        `;
                        tbody.appendChild(row);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        };

        // Fetch data when the page loads
        fetchData(cabangFilter.value);

        // Fetch data when the dropdown value changes
        cabangFilter.addEventListener('change', function() {
            fetchData(this.value);
        });
    });
</script>

</body>
</html>