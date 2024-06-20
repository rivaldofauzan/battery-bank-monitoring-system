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

        // Battery 5
        $latestBattery_5 = Battery_5::orderBy('timestamp', 'desc')->first();
        $latestResistance5 = $latestBattery_5 ? $latestBattery_5->resistance : 0;

        $previousBattery_5 = Battery_5::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance5 = $previousBattery_5 ? $previousBattery_5->resistance : $latestResistance5;

        $resistanceChangePercentage5 = ($previousResistance5 != 0) ? (($latestResistance5 - $previousResistance5) / $previousResistance5) * 100 : 0;

        // Battery 6
        $latestBattery_6 = Battery_6::orderBy('timestamp', 'desc')->first();
        $latestResistance6 = $latestBattery_6 ? $latestBattery_6->resistance : 0;

        $previousBattery_6 = Battery_6::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance6 = $previousBattery_6 ? $previousBattery_6->resistance : $latestResistance6;

        $resistanceChangePercentage6 = ($previousResistance6 != 0) ? (($latestResistance6 - $previousResistance6) / $previousResistance6) * 100 : 0;

        // Battery 7
        $latestBattery_7 = Battery_7::orderBy('timestamp', 'desc')->first();
        $latestResistance7 = $latestBattery_7 ? $latestBattery_7->resistance : 0;

        $previousBattery_7 = Battery_7::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance7 = $previousBattery_7 ? $previousBattery_7->resistance : $latestResistance7;

        $resistanceChangePercentage7 = ($previousResistance7 != 0) ? (($latestResistance7 - $previousResistance7) / $previousResistance7) * 100 : 0;

        // Battery 8
        $latestBattery_8 = Battery_8::orderBy('timestamp', 'desc')->first();
        $latestResistance8 = $latestBattery_8 ? $latestBattery_8->resistance : 0;

        $previousBattery_8 = Battery_8::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousResistance8 = $previousBattery_8 ? $previousBattery_8->resistance : $latestResistance8;

        $resistanceChangePercentage8 = ($previousResistance8 != 0) ? (($latestResistance8 - $previousResistance8) / $previousResistance8) * 100 : 0;

        return view('pages.trending.resistance', compact('latestResistance1','resistanceChangePercentage1', 'latestResistance2','resistanceChangePercentage2', 'latestResistance3','resistanceChangePercentage3', 'latestResistance4','resistanceChangePercentage4', 'latestResistance5','resistanceChangePercentage5', 'latestResistance6','resistanceChangePercentage6', 'latestResistance7','resistanceChangePercentage7', 'latestResistance8','resistanceChangePercentage8'));
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

    public function getResistanceData5()
    {
        $resistanceData5 = Battery_5::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData5);
    }

    public function getResistanceData6()
    {
        $resistanceData6 = Battery_6::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData6);
    }

    public function getResistanceData7()
    {
        $resistanceData7 = Battery_7::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData7);
    }

    public function getResistanceData8()
    {
        $resistanceData8 = Battery_8::select('timestamp', 'resistance')->orderBy('timestamp', 'asc')->get();
        return response()->json($resistanceData8);
    }
}
