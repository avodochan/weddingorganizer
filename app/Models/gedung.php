<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedung extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_gedung',
        'alamat_gedung',
        'kapasitas_gedung',
        'harga_sewa_gedung',
        'status_gedung',
    ];
}
