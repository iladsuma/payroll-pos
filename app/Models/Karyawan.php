<?php

// app/Models/Karyawan.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'cabang', 'gaji_pokok', 'absensi', 'insentif'];

    protected static function booted()
    {
        static::created(function ($karyawan) {
            // Create a new pengiriman entry
            $karyawan->pengirimans()->create([
                'resi' => 0, // Add default values or logic as needed
                'tanggal_pengiriman' => now(), // Or any appropriate default value
                'jumlah_pengiriman' => 0, // Or any appropriate default value
            ]);

            // Create a new potongan entry
            $karyawan->potongans()->create([
                'potongan' => 'Potongan Absensi', // Add default values or logic as needed
                'jumlah' => 0, // Or any appropriate default value
            ]);
        });
    }

    public function pengirimans()
    {
        return $this->hasMany(Pengiriman::class);
    }

    public function potongans()
    {
        return $this->hasMany(Potongan::class);
    }
}
