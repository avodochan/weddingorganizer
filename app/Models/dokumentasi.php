<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumentasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_dokumentasi',
        'nama_penanggungjawab',
        'deskripsi_dokumentasi',
    ];
}
