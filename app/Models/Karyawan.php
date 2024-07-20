<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = ['nama','cabang', 'gaji_pokok', 'absensi', 'insentif'];

    public function pengirimans()
    {
        return $this->hasMany(Pengiriman::class);
    }

    public function potongans()
    {
        return $this->hasMany(Potongan::class, 'karyawan_id');
    }
}
