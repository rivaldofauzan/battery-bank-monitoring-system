<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery_1;
use App\Models\Battery_2;
use App\Models\Battery_3;
use App\Models\Battery_4;

class VoltageController extends Controller
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
    $latestVoltage1 = $latestBattery_1 ? $latestBattery_1->voltage : 0;

    $previousBattery_1 = Battery_1::orderBy('timestamp', 'desc')->skip(1)->first();
    $previousVoltage1 = $previousBattery_1 ? $previousBattery_1->voltage : $latestVoltage1;

    $voltageChangePercentage1 = ($previousVoltage1 != 0) ? (($latestVoltage1 - $previousVoltage1) / $previousVoltage1) * 100 : 0;

    // Battery 2
    $latestBattery_2 = Battery_2::orderBy('timestamp', 'desc')->first();
    $latestVoltage2 = $latestBattery_2 ? $latestBattery_2->voltage : 0;

    $previousBattery_2 = Battery_2::orderBy('timestamp', 'desc')->skip(1)->first();
    $previousVoltage2 = $previousBattery_2 ? $previousBattery_2->voltage : $latestVoltage2;

    $voltageChangePercentage2 = ($previousVoltage2 != 0) ? (($latestVoltage2 - $previousVoltage2) / $previousVoltage2) * 100 : 0;

    // Battery 3
    $latestBattery_3 = Battery_3::orderBy('timestamp', 'desc')->first();
    $latestVoltage3 = $latestBattery_3 ? $latestBattery_3->voltage : 0;

    $previousBattery_3 = Battery_3::orderBy('timestamp', 'desc')->skip(1)->first();
    $previousVoltage3 = $previousBattery_3 ? $previousBattery_3->voltage : $latestVoltage3;

    $voltageChangePercentage3 = ($previousVoltage3 != 0) ? (($latestVoltage3 - $previousVoltage3) / $previousVoltage3) * 100 : 0;

    // Battery 4
    $latestBattery_4 = Battery_4::orderBy('timestamp', 'desc')->first();
    $latestVoltage4 = $latestBattery_4 ? $latestBattery_4->voltage : 0;

    $previousBattery_4 = Battery_4::orderBy('timestamp', 'desc')->skip(1)->first();
    $previousVoltage4 = $previousBattery_4 ? $previousBattery_4->voltage : $latestVoltage4;

    $voltageChangePercentage4 = ($previousVoltage4 != 0) ? (($latestVoltage4 - $previousVoltage4) / $previousVoltage4) * 100 : 0;

    return view('pages.trending.voltage', compact('latestVoltage1','voltageChangePercentage1', 'latestVoltage2','voltageChangePercentage2', 'latestVoltage3','voltageChangePercentage3', 'latestVoltage4','voltageChangePercentage4'));
}


    public function getVoltageData1()
    {
        $voltageData1 = Battery_1::select('timestamp', 'voltage')->orderBy('timestamp', 'asc')->get();
        return response()->json($voltageData1);
    }

    public function getVoltageData2()
    {
        $voltageData2 = Battery_2::select('timestamp', 'voltage')->orderBy('timestamp', 'asc')->get();
        return response()->json($voltageData2);
    }

    public function getVoltageData3()
    {
        $voltageData3 = Battery_3::select('timestamp', 'voltage')->orderBy('timestamp', 'asc')->get();
        return response()->json($voltageData3);
    }

    public function getVoltageData4()
    {
        $voltageData4 = Battery_4::select('timestamp', 'voltage')->orderBy('timestamp', 'asc')->get();
        return response()->json($voltageData4);
    }
}
