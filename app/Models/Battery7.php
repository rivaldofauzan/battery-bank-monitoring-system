<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battery7 extends Model
{
    use HasFactory;

    protected $table = 'battery_7';

    protected $fillable = [
        'voltage',
        'current',
        'humidity',
        'temperature',
        'resistance',
        'power',
    ];

    protected $casts = [
        'voltage' => 'float',
        'current' => 'float',
        'humidity' => 'float',
        'temperature' => 'float',
        'resistance' => 'float',
        'power' => 'float',
    ];
}
