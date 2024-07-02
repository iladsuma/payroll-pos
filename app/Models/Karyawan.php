<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'nama',
        'bulan',
        'gaji_pokok',
        'intensif',
        'potongan',
        'resi',
        'cabang',
    ];
}
