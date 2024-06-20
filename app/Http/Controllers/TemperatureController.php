<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery_1;
use App\Models\Battery_2;
use App\Models\Battery_3;
use App\Models\Battery_4;

class TemperatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Battery 1
        $latestBattery_1 = Battery_1::orderBy('timestamp', 'desc')->first();
        $latestTemperature1 = $latestBattery_1 ? $latestBattery_1->temperature : 0;

        $previousBattery_1 = Battery_1::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature1 = $previousBattery_1 ? $previousBattery_1->temperature : $latestTemperature1;

        $temperatureChangePercentage1 = ($previousTemperature1 != 0) ? (($latestTemperature1 - $previousTemperature1) / $previousTemperature1) * 100 : 0;

        // Battery 2
        $latestBattery_2 = Battery_2::orderBy('timestamp', 'desc')->first();
        $latestTemperature2 = $latestBattery_2 ? $latestBattery_2->temperature : 0;

        $previousBattery_2 = Battery_2::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature2 = $previousBattery_2 ? $previousBattery_2->temperature : $latestTemperature2;

        $temperatureChangePercentage2 = ($previousTemperature2 != 0) ? (($latestTemperature2 - $previousTemperature2) / $previousTemperature2) * 100 : 0;

        // Battery 3
        $latestBattery_3 = Battery_3::orderBy('timestamp', 'desc')->first();
        $latestTemperature3 = $latestBattery_3 ? $latestBattery_3->temperature : 0;

        $previousBattery_3 = Battery_3::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature3 = $previousBattery_3 ? $previousBattery_3->temperature : $latestTemperature3;

        $temperatureChangePercentage3 = ($previousTemperature3 != 0) ? (($latestTemperature3 - $previousTemperature3) / $previousTemperature3) * 100 : 0;

        // Battery 4
        $latestBattery_4 = Battery_4::orderBy('timestamp', 'desc')->first();
        $latestTemperature4 = $latestBattery_4 ? $latestBattery_4->temperature : 0;

        $previousBattery_4 = Battery_4::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature4 = $previousBattery_4 ? $previousBattery_4->temperature : $latestTemperature4;

        $temperatureChangePercentage4 = ($previousTemperature4 != 0) ? (($latestTemperature4 - $previousTemperature4) / $previousTemperature4) * 100 : 0;

        return view('pages.trending.temperature', compact('latestTemperature1','temperatureChangePercentage1', 'latestTemperature2','temperatureChangePercentage2', 'latestTemperature3','temperatureChangePercentage3', 'latestTemperature4','temperatureChangePercentage4'));
    }

    public function getTemperatureData1()
    {
        $temperatureData1 = Battery_1::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData1);
    }

    public function getTemperatureData2()
    {
        $temperatureData2 = Battery_2::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData2);
    }

    public function getTemperatureData3()
    {
        $temperatureData3 = Battery_3::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData3);
    }

    public function getTemperatureData4()
    {
        $temperatureData4 = Battery_4::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData4);
    }
}
