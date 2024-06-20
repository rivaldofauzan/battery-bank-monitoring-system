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

        // Battery 5
        $latestBattery_5 = Battery_5::orderBy('timestamp', 'desc')->first();
        $latestHumidity5 = $latestBattery_5 ? $latestBattery_5->humidity : 0;

        $previousBattery_5 = Battery_5::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity5 = $previousBattery_5 ? $previousBattery_5->humidity : $latestHumidity5;

        $humidityChangePercentage5 = ($previousHumidity5 != 0) ? (($latestHumidity5 - $previousHumidity5) / $previousHumidity5) * 100 : 0;

        // Battery 6
        $latestBattery_6 = Battery_6::orderBy('timestamp', 'desc')->first();
        $latestHumidity6 = $latestBattery_6 ? $latestBattery_6->humidity : 0;

        $previousBattery_6 = Battery_6::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity6 = $previousBattery_6 ? $previousBattery_6->humidity : $latestHumidity6;

        $humidityChangePercentage6 = ($previousHumidity6 != 0) ? (($latestHumidity6 - $previousHumidity6) / $previousHumidity6) * 100 : 0;

        // Battery 7
        $latestBattery_7 = Battery_7::orderBy('timestamp', 'desc')->first();
        $latestHumidity7 = $latestBattery_7 ? $latestBattery_7->humidity : 0;

        $previousBattery_7 = Battery_7::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity7 = $previousBattery_7 ? $previousBattery_7->humidity : $latestHumidity7;

        $humidityChangePercentage7 = ($previousHumidity7 != 0) ? (($latestHumidity7 - $previousHumidity7) / $previousHumidity7) * 100 : 0;

        // Battery 8
        $latestBattery_8 = Battery_8::orderBy('timestamp', 'desc')->first();
        $latestHumidity8 = $latestBattery_8 ? $latestBattery_8->humidity : 0;

        $previousBattery_8 = Battery_8::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousHumidity8 = $previousBattery_8 ? $previousBattery_8->humidity : $latestHumidity8;

        $humidityChangePercentage8 = ($previousHumidity8 != 0) ? (($latestHumidity8 - $previousHumidity8) / $previousHumidity8) * 100 : 0;

        return view('pages.trending.humidity', compact('latestHumidity1','humidityChangePercentage1', 'latestHumidity2','humidityChangePercentage2', 'latestHumidity3','humidityChangePercentage3', 'latestHumidity4','humidityChangePercentage4', 'latestHumidity5','humidityChangePercentage5', 'latestHumidity6','humidityChangePercentage6', 'latestHumidity7','humidityChangePercentage7', 'latestHumidity8','humidityChangePercentage8'));
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

    public function getHumidityData5()
    {
        $humidityData5 = Battery_5::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData5);
    }

    public function getHumidityData6()
    {
        $humidityData6 = Battery_6::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData6);
    }

    public function getHumidityData7()
    {
        $humidityData7 = Battery_7::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData7);
    }

    public function getHumidityData8()
    {
        $humidityData8 = Battery_8::select('timestamp', 'humidity')->orderBy('timestamp', 'asc')->get();
        return response()->json($humidityData8);
    }
}
