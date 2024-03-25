<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hiburan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'jenis_hiburan',
        'harga_sewa_hiburan',
    ];
    
}
