<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\BatteryDataController;

Route::post('/store-battery1-data', [BatteryDataController::class, 'storeBattery1Data']);
Route::post('/store-battery2-data', [BatteryDataController::class, 'storeBattery2Data']);
Route::post('/store-battery3-data', [BatteryDataController::class, 'storeBattery3Data']);
Route::post('/store-battery4-data', [BatteryDataController::class, 'storeBattery4Data']);
Route::post('/store-battery5-data', [BatteryDataController::class, 'storeBattery5Data']);
Route::post('/store-battery6-data', [BatteryDataController::class, 'storeBattery6Data']);
Route::post('/store-battery7-data', [BatteryDataController::class, 'storeBattery7Data']);
Route::post('/store-battery8-data', [BatteryDataController::class, 'storeBattery8Data']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
