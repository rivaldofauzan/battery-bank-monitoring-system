<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Models\Pengukuran;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $dataFeed = new DataFeed();

        $pengukuranspage = Pengukuran::orderBy('timestamp', 'desc')->paginate(10);
        $pengukurans = Pengukuran::orderBy('timestamp', 'desc')->get();

        // Ambil data terbaru
        $latestPengukuran = Pengukuran::orderBy('timestamp', 'desc')->first();

        $latestVoltage = $latestPengukuran ? $latestPengukuran->average_voltage : 0;
        $latestCurrent = $latestPengukuran ? $latestPengukuran->average_current : 0;
        $latestHumidity = $latestPengukuran ? $latestPengukuran->average_humidity : 0;
        $latestTemperature = $latestPengukuran ? $latestPengukuran->average_temperature : 0;
        $latestResistance = $latestPengukuran ? $latestPengukuran->average_resistance : 0;
        $latestPower = $latestPengukuran ? $latestPengukuran->average_power : 0;

        // Ambil data sebelumnya untuk menghitung perubahan persentase
        $previousPengukuran = Pengukuran::orderBy('timestamp', 'desc')->skip(1)->first();

        $previousVoltage = $previousPengukuran ? $previousPengukuran->average_voltage : $latestVoltage;
        $previousCurrent = $previousPengukuran ? $previousPengukuran->average_current : $latestCurrent;
        $previousHumidity = $previousPengukuran ? $previousPengukuran->average_humidity : $latestHumidity;
        $previousTemperature = $previousPengukuran ? $previousPengukuran->average_temperature : $latestTemperature;
        $previousResistance = $previousPengukuran ? $previousPengukuran->average_resistance : $latestResistance;
        $previousPower = $previousPengukuran ? $previousPengukuran->average_power : $latestPower;

        // Hitung perubahan persentase
        $voltageChangePercentage = ($previousVoltage != 0) ? (($latestVoltage - $previousVoltage) / $previousVoltage) * 100 : 0;
        $currentChangePercentage = ($previousCurrent != 0) ? (($latestCurrent - $previousCurrent) / $previousCurrent) * 100 : 0;
        $humidityChangePercentage = ($previousHumidity != 0) ? (($latestHumidity - $previousHumidity) / $previousHumidity) * 100 : 0;
        $temperatureChangePercentage = ($previousTemperature != 0) ? (($latestTemperature - $previousTemperature) / $previousTemperature) * 100 : 0;
        $resistanceChangePercentage = ($previousResistance != 0) ? (($latestResistance - $previousResistance) / $previousResistance) * 100 : 0;
        $powerChangePercentage = ($previousPower != 0) ? (($latestPower - $previousPower) / $previousPower) * 100 : 0;

        Log::info('Voltage Change Percentage:', ['voltageChangePercentage' => $voltageChangePercentage]);

        return view('pages/dashboard/dashboard', compact(
            'dataFeed', 
            'pengukurans',
            'pengukuranspage',
            'latestVoltage', 
            'voltageChangePercentage',
            'latestCurrent',
            'currentChangePercentage',
            'latestHumidity',
            'humidityChangePercentage',
            'latestTemperature',
            'temperatureChangePercentage',
            'latestResistance',
            'resistanceChangePercentage',
            'latestPower',
            'powerChangePercentage'
        ));
    }

        public function getVoltageData()
    {
        $voltageData = Pengukuran::select('timestamp', 'average_voltage')->orderBy('timestamp', 'asc')->get();
        return response()->json($voltageData);
    }

        public function getCurrentData()
    {
        $currentData = Pengukuran::select('timestamp', 'average_current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData);
    }

    public function getHumidityData()
    {
        $humidityData = Pengukuran::select('timestamp', 'average_humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData);
    }
    
    public function getTemperatureData()
    {
        $temperatureData = Pengukuran::select('timestamp', 'average_temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData);
    }
    public function getResistanceData()
    {
        $resistanceData = Pengukuran::select('timestamp', 'average_resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData);
    }

    public function getPowerData()
    {
        $powerData = Pengukuran::select('timestamp', 'average_power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData);
    }

    /**
     * Displays the analytics screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function analytics()
    {
        return view('pages/dashboard/analytics');
    }

    /**
     * Displays the fintech screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fintech()
    {
        return view('pages/dashboard/fintech');
    }
}
