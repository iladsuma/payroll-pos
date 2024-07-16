<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PotonganGajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('potongan_gaji')->insert([
            // Srengat
            [
                'karyawan_id' => 1,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 2,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 3,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 4,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 5,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Wonodadi
            [
                'karyawan_id' => 6,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 7,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 8,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 9,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 10,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Sanankulon
            [
                'karyawan_id' => 11,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 12,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 13,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 14,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 15,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ponggok
            [
                'karyawan_id' => 16,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 17,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 18,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 19,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 20,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Kademangan
            [
                'karyawan_id' => 21,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 22,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 23,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 24,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 25,
                'potongan' => 'Potongan Absensi',
                'jumlah' => rand(1, 9),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
?>
