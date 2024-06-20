<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Pengukuran;

class CalculateAverages extends Command
{
    protected $signature = 'calculate:averages';
    protected $description = 'Calculate averages from battery tables and store in measurements table';

    public function handle()
    {
        $batteries = ['battery_1', 'battery_2', 'battery_3', 'battery_4', 'battery_5', 'battery_6', 'battery_7', 'battery_8'];
        $latestData = [];

        foreach ($batteries as $battery) {
            $latest = DB::table($battery)->latest('timestamp')->first();
            if ($latest) {
                $latestData[] = $latest;
            }
        }

        if (count($latestData) === 8) {
            $averageVoltage = collect($latestData)->avg('voltage');
            $averageCurrent = collect($latestData)->avg('current');
            $averageHumidity = collect($latestData)->avg('humidity');
            $averageTemperature = collect($latestData)->avg('temperature');
            $averageResistance = collect($latestData)->avg('resistance');
            $averagePower = collect($latestData)->avg('power');
            $timestamp = now();

            pengukuran::create([
                'timestamp' => $timestamp,
                'average_voltage' => $averageVoltage,
                'average_current' => $averageCurrent,
                'average_humidity' => $averageHumidity,
                'average_temperature' => $averageTemperature,
                'average_resistance' => $averageResistance,
                'average_power' => $averagePower,
            ]);
        }
    }
}
