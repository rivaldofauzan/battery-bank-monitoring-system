<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery_1;
use App\Models\Battery_2;
use App\Models\Battery_3;
use App\Models\Battery_4;

class HumidityController extends Controller
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
        $latestHumidity1 = $latestBattery_1 ? $latestBattery_1->humidity : 0;

        $previousBattery_1 = Battery_1::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity1 = $previousBattery_1 ? $previousBattery_1->humidity : $latestHumidity1;

        $humidityChangePercentage1 = ($previousHumidity1 != 0) ? (($latestHumidity1 - $previousHumidity1) / $previousHumidity1) * 100 : 0;

        // Battery 2
        $latestBattery_2 = Battery_2::orderBy('timestamp', 'desc')->first();
        $latestHumidity2 = $latestBattery_2 ? $latestBattery_2->humidity : 0;

        $previousBattery_2 = Battery_2::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity2 = $previousBattery_2 ? $previousBattery_2->humidity : $latestHumidity2;

        $humidityChangePercentage2 = ($previousHumidity2 != 0) ? (($latestHumidity2 - $previousHumidity2) / $previousHumidity2) * 100 : 0;

        // Battery 3
        $latestBattery_3 = Battery_3::orderBy('timestamp', 'desc')->first();
        $latestHumidity3 = $latestBattery_3 ? $latestBattery_3->humidity : 0;

        $previousBattery_3 = Battery_3::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity3 = $previousBattery_3 ? $previousBattery_3->humidity : $latestHumidity3;

        $humidityChangePercentage3 = ($previousHumidity3 != 0) ? (($latestHumidity3 - $previousHumidity3) / $previousHumidity3) * 100 : 0;

        // Battery 4
        $latestBattery_4 = Battery_4::orderBy('timestamp', 'desc')->first();
        $latestHumidity4 = $latestBattery_4 ? $latestBattery_4->humidity : 0;

        $previousBattery_4 = Battery_4::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity4 = $previousBattery_4 ? $previousBattery_4->humidity : $latestHumidity4;

        $humidityChangePercentage4 = ($previousHumidity4 != 0) ? (($latestHumidity4 - $previousHumidity4) / $previousHumidity4) * 100 : 0;

        return view('pages.trending.humidity', compact('latestHumidity1','humidityChangePercentage1', 'latestHumidity2','humidityChangePercentage2', 'latestHumidity3','humidityChangePercentage3', 'latestHumidity4','humidityChangePercentage4'));
    }

    public function getHumidityData1()
    {
        $humidityData1 = Battery_1::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData1);
    }

    public function getHumidityData2()
    {
        $humidityData2 = Battery_2::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData2);
    }

    public function getHumidityData3()
    {
        $humidityData3 = Battery_3::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData3);
    }

    public function getHumidityData4()
    {
        $humidityData4 = Battery_4::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData4);
    }
}
