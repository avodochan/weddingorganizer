<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katering extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_katering',
        'deskripsi_katering',
        'harga_katering',
    ];
}
