<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengirimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengirimen')->insert([
            // Srengat
            [
                'karyawan_id' => 1,
                'resi' => 'RESI001',
                'tanggal_pengiriman' => '2024-07-01',
                'jumlah_pengiriman' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 2,
                'resi' => 'RESI002',
                'tanggal_pengiriman' => '2024-07-02',
                'jumlah_pengiriman' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 3,
                'resi' => 'RESI003',
                'tanggal_pengiriman' => '2024-07-03',
                'jumlah_pengiriman' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 4,
                'resi' => 'RESI004',
                'tanggal_pengiriman' => '2024-07-04',
                'jumlah_pengiriman' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 5,
                'resi' => 'RESI005',
                'tanggal_pengiriman' => '2024-07-05',
                'jumlah_pengiriman' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Wonodadi
            [
                'karyawan_id' => 6,
                'resi' => 'RESI006',
                'tanggal_pengiriman' => '2024-07-06',
                'jumlah_pengiriman' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 7,
                'resi' => 'RESI007',
                'tanggal_pengiriman' => '2024-07-07',
                'jumlah_pengiriman' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 8,
                'resi' => 'RESI008',
                'tanggal_pengiriman' => '2024-07-08',
                'jumlah_pengiriman' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 9,
                'resi' => 'RESI009',
                'tanggal_pengiriman' => '2024-07-09',
                'jumlah_pengiriman' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 10,
                'resi' => 'RESI010',
                'tanggal_pengiriman' => '2024-07-10',
                'jumlah_pengiriman' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Sanankulon
            [
                'karyawan_id' => 11,
                'resi' => 'RESI011',
                'tanggal_pengiriman' => '2024-07-01',
                'jumlah_pengiriman' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 12,
                'resi' => 'RESI012',
                'tanggal_pengiriman' => '2024-07-02',
                'jumlah_pengiriman' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 13,
                'resi' => 'RESI013',
                'tanggal_pengiriman' => '2024-07-03',
                'jumlah_pengiriman' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 14,
                'resi' => 'RESI014',
                'tanggal_pengiriman' => '2024-07-04',
                'jumlah_pengiriman' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 15,
                'resi' => 'RESI015',
                'tanggal_pengiriman' => '2024-07-05',
                'jumlah_pengiriman' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ponggok
            [
                'karyawan_id' => 16,
                'resi' => 'RESI016',
                'tanggal_pengiriman' => '2024-07-06',
                'jumlah_pengiriman' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 17,
                'resi' => 'RESI017',
                'tanggal_pengiriman' => '2024-07-07',
                'jumlah_pengiriman' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 18,
                'resi' => 'RESI018',
                'tanggal_pengiriman' => '2024-07-08',
                'jumlah_pengiriman' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 19,
                'resi' => 'RESI019',
                'tanggal_pengiriman' => '2024-07-09',
                'jumlah_pengiriman' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 20,
                'resi' => 'RESI020',
                'tanggal_pengiriman' => '2024-07-10',
                'jumlah_pengiriman' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Kademangan
            [
                'karyawan_id' => 21,
                'resi' => 'RESI021',
                'tanggal_pengiriman' => '2024-07-01',
                'jumlah_pengiriman' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 22,
                'resi' => 'RESI022',
                'tanggal_pengiriman' => '2024-07-02',
                'jumlah_pengiriman' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 23,
                'resi' => 'RESI023',
                'tanggal_pengiriman' => '2024-07-03',
                'jumlah_pengiriman' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 24,
                'resi' => 'RESI024',
                'tanggal_pengiriman' => '2024-07-04',
                'jumlah_pengiriman' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'karyawan_id' => 25,
                'resi' => 'RESI025',
                'tanggal_pengiriman' => '2024-07-05',
                'jumlah_pengiriman' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
?>