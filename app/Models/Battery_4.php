<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Battery_4 extends Model
{
    use HasFactory;

    protected $table = 'battery_4';

    protected $fillable = [
        'timestamp', 
        'average_voltage', 
        'average_current', 
        'average_humidity', 
        'average_temperature', 
        'average_resistance', 
        'average_power'
    ];
}
