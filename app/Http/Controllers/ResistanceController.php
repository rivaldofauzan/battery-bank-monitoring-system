<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery_1;
use App\Models\Battery_2;
use App\Models\Battery_3;
use App\Models\Battery_4;

class ResistanceController extends Controller
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
        $latestResistance1 = $latestBattery_1 ? $latestBattery_1->resistance : 0;

        $previousBattery_1 = Battery_1::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance1 = $previousBattery_1 ? $previousBattery_1->resistance : $latestResistance1;

        $resistanceChangePercentage1 = ($previousResistance1 != 0) ? (($latestResistance1 - $previousResistance1) / $previousResistance1) * 100 : 0;

        // Battery 2
        $latestBattery_2 = Battery_2::orderBy('timestamp', 'desc')->first();
        $latestResistance2 = $latestBattery_2 ? $latestBattery_2->resistance : 0;

        $previousBattery_2 = Battery_2::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance2 = $previousBattery_2 ? $previousBattery_2->resistance : $latestResistance2;

        $resistanceChangePercentage2 = ($previousResistance2 != 0) ? (($latestResistance2 - $previousResistance2) / $previousResistance2) * 100 : 0;

        // Battery 3
        $latestBattery_3 = Battery_3::orderBy('timestamp', 'desc')->first();
        $latestResistance3 = $latestBattery_3 ? $latestBattery_3->resistance : 0;

        $previousBattery_3 = Battery_3::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance3 = $previousBattery_3 ? $previousBattery_3->resistance : $latestResistance3;

        $resistanceChangePercentage3 = ($previousResistance3 != 0) ? (($latestResistance3 - $previousResistance3) / $previousResistance3) * 100 : 0;

        // Battery 4
        $latestBattery_4 = Battery_4::orderBy('timestamp', 'desc')->first();
        $latestResistance4 = $latestBattery_4 ? $latestBattery_4->resistance : 0;

        $previousBattery_4 = Battery_4::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance4 = $previousBattery_4 ? $previousBattery_4->resistance : $latestResistance4;

        $resistanceChangePercentage4 = ($previousResistance4 != 0) ? (($latestResistance4 - $previousResistance4) / $previousResistance4) * 100 : 0;

        return view('pages.trending.resistance', compact('latestResistance1','resistanceChangePercentage1', 'latestResistance2','resistanceChangePercentage2', 'latestResistance3','resistanceChangePercentage3', 'latestResistance4','resistanceChangePercentage4'));
    }

    public function getResistanceData1()
    {
        $resistanceData1 = Battery_1::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData1);
    }

    public function getResistanceData2()
    {
        $resistanceData2 = Battery_2::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData2);
    }

    public function getResistanceData3()
    {
        $resistanceData3 = Battery_3::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData3);
    }

    public function getResistanceData4()
    {
        $resistanceData4 = Battery_4::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData4);
    }
}
