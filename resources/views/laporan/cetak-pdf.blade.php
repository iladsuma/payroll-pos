<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Slip Gaji Karyawan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .section-title {
            font-weight: bold;
        }
        .total-row th, .total-row td {
            font-weight: bold;
        }
        .amount {
            text-align: right;
        }
    </style>
</head>
<body>
    @foreach($laporanGaji as $gaji)
    <div class="header">
        <h1>PT. PERSERO POS INDONESIA</h1>
        <h2>CABANG {{ strtoupper($gaji->cabang) }}</h2>
        <h3>SLIP GAJI KARYAWAN</h3>
     
    </div>

    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $gaji->nama }}</td>
        </tr>
      
    
    </table>

    <h4 class="section-title">PENGHASILAN</h4>
    <table>
        <tr>
            <th>Gaji Pokok</th>
            <td class="amount">Rp {{ number_format($gaji->gaji_pokok, 0, ',', '.') }}</td>
        </tr>

        <tr>
            <th>Intensif</th>
            <td class="amount">Rp {{ number_format($gaji->intensif*3000, 2, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Potongan</th>
            <td class="amount">Rp {{ number_format($gaji->potongan*5000, 2, ',', '.') }}</td>
        </tr>
        <tr class="total-row">
            <th>Total (A)</th>
            <td class="amount">Rp {{ number_format($gaji->gaji_pokok + $gaji->intensif * 3000 - $gaji->potongan * 5000, 2, ',', '.') }}</td>
        </tr>
    </table>

    <h4 class="section-title">POTONGAN</h4>
    <table>
   
    </table>

    <h4 class="section-title">PENERIMAAN BERSIH (A - B)</h4>
    <table>
        <tr class="total-row">
            <th>Total</th>
            <td class="amount">Rp {{ number_format($gaji->gaji_pokok + $gaji->intensif * 3000 - $gaji->potongan * 5000, 2, ',', '.') }}</td>
        </tr>
    </table>

    <hr>
    @endforeach
</body>
</html>
