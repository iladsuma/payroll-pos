<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        // Srengat branch
        Karyawan::create([
            'nama' => 'Bagas Dwi',
            'bulan' => 'Juni',
            'gaji_pokok' => 1000000,
            'intensif' => 55000,
            'potongan' => 10000,
            'resi' => '12345',
            'cabang' => 'Srengat',
        ]);

        Karyawan::create([
            'nama' => 'Agus',
            'bulan' => 'Juni',
            'gaji_pokok' => 1000000,
            'intensif' => 25000,
            'potongan' => 30000,
            'resi' => '67890',
            'cabang' => 'Srengat',
        ]);

        Karyawan::create([
            'nama' => 'Rendy Harahap',
            'bulan' => 'Juni',
            'gaji_pokok' => 1000000,
            'intensif' => 0,
            'potongan' => 20000,
            'resi' => '111213',
            'cabang' => 'Srengat',
        ]);

        Karyawan::create([
            'nama' => 'M. Alfan',
            'bulan' => 'Juni',
            'gaji_pokok' => 1000000,
            'intensif' => 0,
            'potongan' => 10000,
            'resi' => '141516',
            'cabang' => 'Srengat',
        ]);

        // Sanan Kulon branch
        Karyawan::create([
            'nama' => 'Siti Rahma',
            'bulan' => 'Juni',
            'gaji_pokok' => 1100000,
            'intensif' => 50000,
            'potongan' => 15000,
            'resi' => '161718',
            'cabang' => 'Sanan Kulon',
        ]);

        Karyawan::create([
            'nama' => 'Budi Santoso',
            'bulan' => 'Juni',
            'gaji_pokok' => 1200000,
            'intensif' => 60000,
            'potongan' => 10000,
            'resi' => '192021',
            'cabang' => 'Sanan Kulon',
        ]);

        Karyawan::create([
            'nama' => 'Andi Wijaya',
            'bulan' => 'Juni',
            'gaji_pokok' => 1300000,
            'intensif' => 70000,
            'potongan' => 5000,
            'resi' => '222324',
            'cabang' => 'Sanan Kulon',
        ]);

        Karyawan::create([
            'nama' => 'Dewi Sartika',
            'bulan' => 'Juni',
            'gaji_pokok' => 1400000,
            'intensif' => 80000,
            'potongan' => 20000,
            'resi' => '252627',
            'cabang' => 'Sanan Kulon',
        ]);

        // Ponggok branch
        Karyawan::create([
            'nama' => 'Rina Marlina',
            'bulan' => 'Juni',
            'gaji_pokok' => 1150000,
            'intensif' => 45000,
            'potongan' => 12000,
            'resi' => '282930',
            'cabang' => 'Ponggok',
        ]);

        Karyawan::create([
            'nama' => 'Yoga Saputra',
            'bulan' => 'Juni',
            'gaji_pokok' => 1250000,
            'intensif' => 55000,
            'potongan' => 8000,
            'resi' => '313233',
            'cabang' => 'Ponggok',
        ]);

        Karyawan::create([
            'nama' => 'Eko Priyanto',
            'bulan' => 'Juni',
            'gaji_pokok' => 1350000,
            'intensif' => 65000,
            'potongan' => 15000,
            'resi' => '343536',
            'cabang' => 'Ponggok',
        ]);

        Karyawan::create([
            'nama' => 'Citra Ayu',
            'bulan' => 'Juni',
            'gaji_pokok' => 1450000,
            'intensif' => 75000,
            'potongan' => 10000,
            'resi' => '373839',
            'cabang' => 'Ponggok',
        ]);

        // Wonodadi branch
        Karyawan::create([
            'nama' => 'Yuni Kartika',
            'bulan' => 'Juni',
            'gaji_pokok' => 1100000,
            'intensif' => 50000,
            'potongan' => 20000,
            'resi' => '404142',
            'cabang' => 'Wonodadi',
        ]);

        Karyawan::create([
            'nama' => 'Adi Nugroho',
            'bulan' => 'Juni',
            'gaji_pokok' => 1200000,
            'intensif' => 60000,
            'potongan' => 25000,
            'resi' => '434445',
            'cabang' => 'Wonodadi',
        ]);

        Karyawan::create([
            'nama' => 'Fitri Amelia',
            'bulan' => 'Juni',
            'gaji_pokok' => 1300000,
            'intensif' => 70000,
            'potongan' => 30000,
            'resi' => '464748',
            'cabang' => 'Wonodadi',
        ]);

        Karyawan::create([
            'nama' => 'Hendra Pratama',
            'bulan' => 'Juni',
            'gaji_pokok' => 1400000,
            'intensif' => 80000,
            'potongan' => 35000,
            'resi' => '495051',
            'cabang' => 'Wonodadi',
        ]);

        // Kademangan branch
        Karyawan::create([
            'nama' => 'Rani Puspita',
            'bulan' => 'Juni',
            'gaji_pokok' => 1150000,
            'intensif' => 55000,
            'potongan' => 15000,
            'resi' => '525354',
            'cabang' => 'Kademangan',
        ]);

        Karyawan::create([
            'nama' => 'Bayu Saputra',
            'bulan' => 'Juni',
            'gaji_pokok' => 1250000,
            'intensif' => 65000,
            'potongan' => 10000,
            'resi' => '555657',
            'cabang' => 'Kademangan',
        ]);

        Karyawan::create([
            'nama' => 'Lestari Dewi',
            'bulan' => 'Juni',
            'gaji_pokok' => 1350000,
            'intensif' => 75000,
            'potongan' => 20000,
            'resi' => '585960',
            'cabang' => 'Kademangan',
        ]);

        Karyawan::create([
            'nama' => 'Sandy Hermawan',
            'bulan' => 'Juni',
            'gaji_pokok' => 1450000,
            'intensif' => 85000,
            'potongan' => 25000,
            'resi' => '616263',
            'cabang' => 'Kademangan',
        ]);
    }
}
