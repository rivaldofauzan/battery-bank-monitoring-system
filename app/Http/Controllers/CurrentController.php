<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery_1;
use App\Models\Battery_2;
use App\Models\Battery_3;
use App\Models\Battery_4;

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

        return view('pages.trending.current', compact('latestCurrent1','currentChangePercentage1', 'latestCurrent2','currentChangePercentage2', 'latestCurrent3','currentChangePercentage3', 'latestCurrent4','currentChangePercentage4'));
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
}
