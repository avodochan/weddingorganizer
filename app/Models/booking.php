<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_customer',
        'id_katering',
        'kuantitas_makanan',
        'id_dekorasi',
        'id_dokumentasi',
        'id_hiburan',
        'id_gedung',
        'id_mua',
        'id_souvenir',
        'kuantitas_souvenir',
        'id_undangan',
        'kuantitas_undangan',
        'tanggal_booking',
        'tanggal_acara',
        'status_booking',
        'total_biaya',
    ];
}
