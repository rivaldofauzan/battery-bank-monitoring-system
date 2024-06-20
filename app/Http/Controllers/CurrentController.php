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

class CurrentController extends Controller
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
        $latestCurrent1 = $latestBattery_1 ? $latestBattery_1->current : 0;

        $previousBattery_1 = Battery_1::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent1 = $previousBattery_1 ? $previousBattery_1->current : $latestCurrent1;

        $currentChangePercentage1 = ($previousCurrent1 != 0) ? (($latestCurrent1 - $previousCurrent1) / $previousCurrent1) * 100 : 0;

        // Battery 2
        $latestBattery_2 = Battery_2::orderBy('timestamp', 'desc')->first();
        $latestCurrent2 = $latestBattery_2 ? $latestBattery_2->current : 0;

        $previousBattery_2 = Battery_2::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent2 = $previousBattery_2 ? $previousBattery_2->current : $latestCurrent2;

        $currentChangePercentage2 = ($previousCurrent2 != 0) ? (($latestCurrent2 - $previousCurrent2) / $previousCurrent2) * 100 : 0;

        // Battery 3
        $latestBattery_3 = Battery_3::orderBy('timestamp', 'desc')->first();
        $latestCurrent3 = $latestBattery_3 ? $latestBattery_3->current : 0;

        $previousBattery_3 = Battery_3::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent3 = $previousBattery_3 ? $previousBattery_3->current : $latestCurrent3;

        $currentChangePercentage3 = ($previousCurrent3 != 0) ? (($latestCurrent3 - $previousCurrent3) / $previousCurrent3) * 100 : 0;

        // Battery 4
        $latestBattery_4 = Battery_4::orderBy('timestamp', 'desc')->first();
        $latestCurrent4 = $latestBattery_4 ? $latestBattery_4->current : 0;

        $previousBattery_4 = Battery_4::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent4 = $previousBattery_4 ? $previousBattery_4->current : $latestCurrent4;

        $currentChangePercentage4 = ($previousCurrent4 != 0) ? (($latestCurrent4 - $previousCurrent4) / $previousCurrent4) * 100 : 0;

        // Battery 5
        $latestBattery_5 = Battery_5::orderBy('timestamp', 'desc')->first();
        $latestCurrent5 = $latestBattery_5 ? $latestBattery_5->current : 0;

        $previousBattery_5 = Battery_5::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent5 = $previousBattery_5 ? $previousBattery_5->current : $latestCurrent5;

        $currentChangePercentage5 = ($previousCurrent5 != 0) ? (($latestCurrent5 - $previousCurrent5) / $previousCurrent5) * 100 : 0;

        // Battery 6
        $latestBattery_6 = Battery_6::orderBy('timestamp', 'desc')->first();
        $latestCurrent6 = $latestBattery_6 ? $latestBattery_6->current : 0;

        $previousBattery_6 = Battery_6::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent6 = $previousBattery_6 ? $previousBattery_6->current : $latestCurrent6;

        $currentChangePercentage6 = ($previousCurrent6 != 0) ? (($latestCurrent6 - $previousCurrent6) / $previousCurrent6) * 100 : 0;

        // Battery 7
        $latestBattery_7 = Battery_7::orderBy('timestamp', 'desc')->first();
        $latestCurrent7 = $latestBattery_7 ? $latestBattery_7->current : 0;

        $previousBattery_7 = Battery_7::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent7 = $previousBattery_7 ? $previousBattery_7->current : $latestCurrent7;

        $currentChangePercentage7 = ($previousCurrent7 != 0) ? (($latestCurrent7 - $previousCurrent7) / $previousCurrent7) * 100 : 0;

        // Battery 8
        $latestBattery_8 = Battery_8::orderBy('timestamp', 'desc')->first();
        $latestCurrent8 = $latestBattery_8 ? $latestBattery_8->current : 0;

        $previousBattery_8 = Battery_8::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousCurrent8 = $previousBattery_8 ? $previousBattery_8->current : $latestCurrent8;

        $currentChangePercentage8 = ($previousCurrent8 != 0) ? (($latestCurrent8 - $previousCurrent8) / $previousCurrent8) * 100 : 0;

        return view('pages.trending.current', compact('latestCurrent1','currentChangePercentage1', 'latestCurrent2','currentChangePercentage2', 'latestCurrent3','currentChangePercentage3', 'latestCurrent4','currentChangePercentage4', 'latestCurrent5','currentChangePercentage5', 'latestCurrent6','currentChangePercentage6', 'latestCurrent7','currentChangePercentage7', 'latestCurrent8','currentChangePercentage8'));
    }

    public function getCurrentData1()
    {
        $currentData1 = Battery_1::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData1);
    }

    public function getCurrentData2()
    {
        $currentData2 = Battery_2::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData2);
    }

    public function getCurrentData3()
    {
        $currentData3 = Battery_3::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData3);
    }

    public function getCurrentData4()
    {
        $currentData4 = Battery_4::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData4);
    }

    public function getCurrentData5()
    {
        $currentData5 = Battery_5::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData5);
    }

    public function getCurrentData6()
    {
        $currentData6 = Battery_6::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData6);
    }

    public function getCurrentData7()
    {
        $currentData7 = Battery_7::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData7);
    }

    public function getCurrentData8()
    {
        $currentData8 = Battery_8::select('timestamp', 'current')->orderBy('timestamp', 'asc')->get();
        return response()->json($currentData8);
    }
}
