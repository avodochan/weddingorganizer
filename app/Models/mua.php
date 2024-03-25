<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mua extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_mua',
        'deskripsi_mua',
        'harga_mua',
    ];
}
