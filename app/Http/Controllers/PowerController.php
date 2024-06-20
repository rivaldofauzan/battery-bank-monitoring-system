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

class PowerController extends Controller
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
        $latestPower1 = $latestBattery_1 ? $latestBattery_1->power : 0;

        $previousBattery_1 = Battery_1::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower1 = $previousBattery_1 ? $previousBattery_1->power : $latestPower1;

        $powerChangePercentage1 = ($previousPower1 != 0) ? (($latestPower1 - $previousPower1) / $previousPower1) * 100 : 0;

        // Battery 2
        $latestBattery_2 = Battery_2::orderBy('timestamp', 'desc')->first();
        $latestPower2 = $latestBattery_2 ? $latestBattery_2->power : 0;

        $previousBattery_2 = Battery_2::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower2 = $previousBattery_2 ? $previousBattery_2->power : $latestPower2;

        $powerChangePercentage2 = ($previousPower2 != 0) ? (($latestPower2 - $previousPower2) / $previousPower2) * 100 : 0;

        // Battery 3
        $latestBattery_3 = Battery_3::orderBy('timestamp', 'desc')->first();
        $latestPower3 = $latestBattery_3 ? $latestBattery_3->power : 0;

        $previousBattery_3 = Battery_3::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower3 = $previousBattery_3 ? $previousBattery_3->power : $latestPower3;

        $powerChangePercentage3 = ($previousPower3 != 0) ? (($latestPower3 - $previousPower3) / $previousPower3) * 100 : 0;

        // Battery 4
        $latestBattery_4 = Battery_4::orderBy('timestamp', 'desc')->first();
        $latestPower4 = $latestBattery_4 ? $latestBattery_4->power : 0;

        $previousBattery_4 = Battery_4::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower4 = $previousBattery_4 ? $previousBattery_4->power : $latestPower4;

        $powerChangePercentage4 = ($previousPower4 != 0) ? (($latestPower4 - $previousPower4) / $previousPower4) * 100 : 0;

        // Battery 5
        $latestBattery_5 = Battery_5::orderBy('timestamp', 'desc')->first();
        $latestPower5 = $latestBattery_5 ? $latestBattery_5->power : 0;

        $previousBattery_5 = Battery_5::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower5 = $previousBattery_5 ? $previousBattery_5->power : $latestPower5;

        $powerChangePercentage5 = ($previousPower5 != 0) ? (($latestPower5 - $previousPower5) / $previousPower5) * 100 : 0;

        // Battery 6
        $latestBattery_6 = Battery_6::orderBy('timestamp', 'desc')->first();
        $latestPower6 = $latestBattery_6 ? $latestBattery_6->power : 0;

        $previousBattery_6 = Battery_6::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower6 = $previousBattery_6 ? $previousBattery_6->power : $latestPower6;

        $powerChangePercentage6 = ($previousPower6 != 0) ? (($latestPower6 - $previousPower6) / $previousPower6) * 100 : 0;

        // Battery 7
        $latestBattery_7 = Battery_7::orderBy('timestamp', 'desc')->first();
        $latestPower7 = $latestBattery_7 ? $latestBattery_7->power : 0;

        $previousBattery_7 = Battery_7::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower7 = $previousBattery_7 ? $previousBattery_7->power : $latestPower7;

        $powerChangePercentage7 = ($previousPower7 != 0) ? (($latestPower7 - $previousPower7) / $previousPower7) * 100 : 0;

        // Battery 8
        $latestBattery_8 = Battery_8::orderBy('timestamp', 'desc')->first();
        $latestPower8 = $latestBattery_8 ? $latestBattery_8->power : 0;

        $previousBattery_8 = Battery_8::orderBy('timestamp', 'desc')->skip(1)->first();
        $previousPower8 = $previousBattery_8 ? $previousBattery_8->power : $latestPower8;

        $powerChangePercentage8 = ($previousPower8 != 0) ? (($latestPower8 - $previousPower8) / $previousPower8) * 100 : 0;

        return view('pages.trending.power', compact('latestPower1','powerChangePercentage1', 'latestPower2','powerChangePercentage2', 'latestPower3','powerChangePercentage3', 'latestPower4','powerChangePercentage4', 'latestPower5','powerChangePercentage5', 'latestPower6','powerChangePercentage6', 'latestPower7','powerChangePercentage7', 'latestPower8','powerChangePercentage8'));
    }

    public function getPowerData1()
    {
        $powerData1 = Battery_1::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData1);
    }

    public function getPowerData2()
    {
        $powerData2 = Battery_2::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData2);
    }

    public function getPowerData3()
    {
        $powerData3 = Battery_3::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData3);
    }

    public function getPowerData4()
    {
        $powerData4 = Battery_4::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData4);
    }

    public function getPowerData5()
    {
        $powerData5 = Battery_5::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData5);
    }

    public function getPowerData6()
    {
        $powerData6 = Battery_6::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData6);
    }

    public function getPowerData7()
    {
        $powerData7 = Battery_7::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData7);
    }

    public function getPowerData8()
    {
        $powerData8 = Battery_8::select('timestamp', 'power')->orderBy('timestamp', 'asc')->get();
        return response()->json($powerData8);
    }
}
