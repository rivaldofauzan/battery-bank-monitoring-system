<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Pengukuran;
use Carbon\Carbon;

class CalculateAverages extends Command
{
    protected $signature = 'calculate:averages';
    protected $description = 'Calculate averages from battery tables and store in measurements table';

    public function handle()
    {
        $batteries = ['battery_1', 'battery_2', 'battery_3', 'battery_4'];
        $latestData = [];

        foreach ($batteries as $battery) {
            $latest = DB::table($battery)->latest('timestamp')->first();
            if ($latest) {
                $latestData[] = $latest;
            }
        }

        // Check if we have data from all 4 batteries
        if (count($latestData) === count($batteries)) {
            $averageVoltage = collect($latestData)->avg('voltage');
            $averageCurrent = collect($latestData)->avg('current');
            $averageHumidity = collect($latestData)->avg('humidity');
            $averageTemperature = collect($latestData)->avg('temperature');
            $averageResistance = collect($latestData)->avg('resistance');
            $averagePower = collect($latestData)->avg('power');
            $timestamp = Carbon::now()->setTimezone('Asia/Jakarta'); // Set timezone to GMT+7

            Pengukuran::create([
                'timestamp' => $timestamp,
                'average_voltage' => $averageVoltage,
                'average_current' => $averageCurrent,
                'average_humidity' => $averageHumidity,
                'average_temperature' => $averageTemperature,
                'average_resistance' => $averageResistance,
                'average_power' => $averagePower,
            ]);

            $this->info('Averages calculated and stored successfully.');
        } else {
            $this->error('Not enough data to calculate averages.');
        }
    }
}
