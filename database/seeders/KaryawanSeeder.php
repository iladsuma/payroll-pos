<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('karyawans')->insert([
            // Srengat
            [
                'nama' => 'Budi Santoso',
                'cabang' => 'Srengat',
                'gaji_pokok' => 5000000,
                'absensi' => 20,
                'insentif' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'cabang' => 'Srengat',
                'gaji_pokok' => 4500000,
                'absensi' => 22,
                'insentif' => 450000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Joko Susilo',
                'cabang' => 'Srengat',
                'gaji_pokok' => 4800000,
                'absensi' => 21,
                'insentif' => 480000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rini Setiawati',
                'cabang' => 'Srengat',
                'gaji_pokok' => 4600000,
                'absensi' => 23,
                'insentif' => 460000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Andi Wijaya',
                'cabang' => 'Srengat',
                'gaji_pokok' => 4700000,
                'absensi' => 20,
                'insentif' => 470000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Wonodadi
            [
                'nama' => 'Ahmad Fauzi',
                'cabang' => 'Wonodadi',
                'gaji_pokok' => 5200000,
                'absensi' => 18,
                'insentif' => 520000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Lina Indah',
                'cabang' => 'Wonodadi',
                'gaji_pokok' => 4900000,
                'absensi' => 19,
                'insentif' => 490000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Surya Nugraha',
                'cabang' => 'Wonodadi',
                'gaji_pokok' => 4800000,
                'absensi' => 20,
                'insentif' => 480000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Fitriani Wulandari',
                'cabang' => 'Wonodadi',
                'gaji_pokok' => 4700000,
                'absensi' => 21,
                'insentif' => 470000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Hendra Wijaya',
                'cabang' => 'Wonodadi',
                'gaji_pokok' => 4900000,
                'absensi' => 19,
                'insentif' => 490000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Sanankulon
            [
                'nama' => 'Dewi Lestari',
                'cabang' => 'Sanankulon',
                'gaji_pokok' => 4800000,
                'absensi' => 22,
                'insentif' => 480000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Arief Gunawan',
                'cabang' => 'Sanankulon',
                'gaji_pokok' => 4600000,
                'absensi' => 23,
                'insentif' => 460000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Fitri Handayani',
                'cabang' => 'Sanankulon',
                'gaji_pokok' => 4900000,
                'absensi' => 18,
                'insentif' => 490000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Eko Prasetyo',
                'cabang' => 'Sanankulon',
                'gaji_pokok' => 4700000,
                'absensi' => 20,
                'insentif' => 470000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Rahayu',
                'cabang' => 'Sanankulon',
                'gaji_pokok' => 5000000,
                'absensi' => 19,
                'insentif' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ponggok
            [
                'nama' => 'Agus Salim',
                'cabang' => 'Ponggok',
                'gaji_pokok' => 4700000,
                'absensi' => 21,
                'insentif' => 470000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rina Fitriani',
                'cabang' => 'Ponggok',
                'gaji_pokok' => 4800000,
                'absensi' => 20,
                'insentif' => 480000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dedi Prasetya',
                'cabang' => 'Ponggok',
                'gaji_pokok' => 4900000,
                'absensi' => 19,
                'insentif' => 490000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nina Kusuma',
                'cabang' => 'Ponggok',
                'gaji_pokok' => 4600000,
                'absensi' => 22,
                'insentif' => 460000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Yanto Wijaya',
                'cabang' => 'Ponggok',
                'gaji_pokok' => 4800000,
                'absensi' => 21,
                'insentif' => 480000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Kademangan
            [
                'nama' => 'Putri Anggraini',
                'cabang' => 'Kademangan',
                'gaji_pokok' => 4600000,
                'absensi' => 23,
                'insentif' => 460000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Joko Santoso',
                'cabang' => 'Kademangan',
                'gaji_pokok' => 4800000,
                'absensi' => 21,
                'insentif' => 480000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Lia Fitriani',
                'cabang' => 'Kademangan',
                'gaji_pokok' => 4700000,
                'absensi' => 20,
                'insentif' => 470000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rudi Hartono',
                'cabang' => 'Kademangan',
                'gaji_pokok' => 4900000,
                'absensi' => 19,
                'insentif' => 490000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Rahayu',
                'cabang' => 'Kademangan',
                'gaji_pokok' => 5000000,
                'absensi' => 18,
                'insentif' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
?>