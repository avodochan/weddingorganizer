<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class souvenir extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_souvenir',
        'harga_souvenir',
    ];
}
