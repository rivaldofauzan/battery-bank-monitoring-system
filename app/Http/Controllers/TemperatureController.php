<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery_1;
use App\Models\Battery_2;
use App\Models\Battery_3;
use App\Models\Battery_4;
use App\Models\Battery_5;
use App\Models\Battery_6;
use App\Models\Battery_7;
use App\Models\Battery_8;

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

        // Battery 5
        $latestBattery_5 = Battery_5::orderBy('timestamp', 'desc')->first();
        $latestTemperature5 = $latestBattery_5 ? $latestBattery_5->temperature : 0;

        $previousBattery_5 = Battery_5::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature5 = $previousBattery_5 ? $previousBattery_5->temperature : $latestTemperature5;

        $temperatureChangePercentage5 = ($previousTemperature5 != 0) ? (($latestTemperature5 - $previousTemperature5) / $previousTemperature5) * 100 : 0;

        // Battery 6
        $latestBattery_6 = Battery_6::orderBy('timestamp', 'desc')->first();
        $latestTemperature6 = $latestBattery_6 ? $latestBattery_6->temperature : 0;

        $previousBattery_6 = Battery_6::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature6 = $previousBattery_6 ? $previousBattery_6->temperature : $latestTemperature6;

        $temperatureChangePercentage6 = ($previousTemperature6 != 0) ? (($latestTemperature6 - $previousTemperature6) / $previousTemperature6) * 100 : 0;

        // Battery 7
        $latestBattery_7 = Battery_7::orderBy('timestamp', 'desc')->first();
        $latestTemperature7 = $latestBattery_7 ? $latestBattery_7->temperature : 0;

        $previousBattery_7 = Battery_7::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature7 = $previousBattery_7 ? $previousBattery_7->temperature : $latestTemperature7;

        $temperatureChangePercentage7 = ($previousTemperature7 != 0) ? (($latestTemperature7 - $previousTemperature7) / $previousTemperature7) * 100 : 0;

        // Battery 8
        $latestBattery_8 = Battery_8::orderBy('timestamp', 'desc')->first();
        $latestTemperature8 = $latestBattery_8 ? $latestBattery_8->temperature : 0;

        $previousBattery_8 = Battery_8::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousTemperature8 = $previousBattery_8 ? $previousBattery_8->temperature : $latestTemperature8;

        $temperatureChangePercentage8 = ($previousTemperature8 != 0) ? (($latestTemperature8 - $previousTemperature8) / $previousTemperature8) * 100 : 0;

        return view('pages.trending.temperature', compact('latestTemperature1','temperatureChangePercentage1', 'latestTemperature2','temperatureChangePercentage2', 'latestTemperature3','temperatureChangePercentage3', 'latestTemperature4','temperatureChangePercentage4', 'latestTemperature5','temperatureChangePercentage5', 'latestTemperature6','temperatureChangePercentage6', 'latestTemperature7','temperatureChangePercentage7', 'latestTemperature8','temperatureChangePercentage8'));
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

    public function getTemperatureData5()
    {
        $temperatureData5 = Battery_5::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData5);
    }

    public function getTemperatureData6()
    {
        $temperatureData6 = Battery_6::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData6);
    }

    public function getTemperatureData7()
    {
        $temperatureData7 = Battery_7::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData7);
    }

    public function getTemperatureData8()
    {
        $temperatureData8 = Battery_8::select('timestamp', 'temperature')->orderBy('timestamp', 'asc')->get();
        return response()->json($temperatureData8);
    }
}
