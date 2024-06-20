<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Battery1;
use App\Models\Battery2;
use App\Models\Battery3;
use App\Models\Battery4;
use Illuminate\Support\Facades\Log;

class BatteryDataController extends Controller
{
    public function storeBattery1Data(Request $request)
    {
        Log::info('Request received: ', $request->all());

        $data = $request->validate([
            'voltage' => 'required',
            'current' => 'required',
            'humidity' => 'required',
            'temperature' => 'required',
            'resistance' => 'required',
            'power' => 'required',
        ]);

        Battery1::create($data);

        return response()->json(['message' => 'Data saved successfully'], 200);
    }

    public function storeBattery2Data(Request $request)
    {
        Log::info('Request received: ', $request->all());

        $data = $request->validate([
            'voltage' => 'required',
            'current' => 'required',
            'humidity' => 'required',
            'temperature' => 'required',
            'resistance' => 'required',
            'power' => 'required',
        ]);

        Battery2::create($data);

        return response()->json(['message' => 'Data saved successfully'], 200);
    }

    public function storeBattery3Data(Request $request)
    {
        Log::info('Request received: ', $request->all());

        $data = $request->validate([
            'voltage' => 'required',
            'current' => 'required',
            'humidity' => 'required',
            'temperature' => 'required',
            'resistance' => 'required',
            'power' => 'required',
        ]);

        Battery3::create($data);

        return response()->json(['message' => 'Data saved successfully'], 200);
    }

    public function storeBattery4Data(Request $request)
    {
        Log::info('Request received: ', $request->all());

        $data = $request->validate([
            'voltage' => 'required',
            'current' => 'required',
            'humidity' => 'required',
            'temperature' => 'required',
            'resistance' => 'required',
            'power' => 'required',
        ]);

        Battery4::create($data);

        return response()->json(['message' => 'Data saved successfully'], 200);
    }
}
