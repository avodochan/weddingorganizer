<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_booking',
        'metode_pembayaran',
        'jumlah_pembayaran',
        'status_transaksi',
    ];
}
