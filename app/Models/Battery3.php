<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battery3 extends Model
{
    use HasFactory;

    protected $table = 'battery_3';

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
