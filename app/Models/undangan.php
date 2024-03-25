<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class undangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'jenis_undangan',
        'bahan_undangan',
        'harga_undangan',
    ];
}
