<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    protected $table = 'pengirimen';

    protected $fillable = ['karyawan_id', 'resi', 'tanggal_pengiriman', 'jumlah_pengiriman'];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
