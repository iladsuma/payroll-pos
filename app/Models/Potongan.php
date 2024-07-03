<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potongan extends Model
{
    use HasFactory;

    protected $table = 'potongan_gaji';

    protected $fillable = [
        'nama',
        'cabang',
        'potongan',
        'jumlah',
        'total_potongan',
    ];
}
