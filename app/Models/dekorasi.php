<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dekorasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_dekorasi',
        'deskripsi_dekorasi',
        'harga_dekorasi',
        'gambar_dekorasi',
    ];
}
