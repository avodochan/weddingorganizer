<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_booking',
        'testimoni',
        'rating',
        'id_customer',
    ];
}
