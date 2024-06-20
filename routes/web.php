<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\VoltageController;
use App\Http\Controllers\CurrentController;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\HumidityController;
use App\Http\Controllers\ResistanceController;
use App\Http\Controllers\PowerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
    Route::get('/json-voltage-data', [DashboardController::class, 'getVoltageData']);
    Route::get('/json-current-data', [DashboardController::class, 'getCurrentData']);
    Route::get('/json-humidity-data', [DashboardController::class, 'getHumidityData']);
    Route::get('/json-temperature-data', [DashboardController::class, 'getTemperatureData']);
    Route::get('/json-resistance-data', [DashboardController::class, 'getResistanceData']);
    Route::get('/json-power-data', [DashboardController::class, 'getPowerData']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/table', [TableController::class, 'index'])->name('table');

    Route::get('/voltage', [VoltageController::class, 'index'])->name('voltage');
    Route::get('/json-voltage1', [VoltageController::class, 'getVoltageData1']);
    Route::get('/json-voltage2', [VoltageController::class, 'getVoltageData2']);
    Route::get('/json-voltage3', [VoltageController::class, 'getVoltageData3']);
    Route::get('/json-voltage4', [VoltageController::class, 'getVoltageData4']);

    // Routes for Current
    Route::get('/current', [CurrentController::class, 'index'])->name('current');
    Route::get('/json-current1', [CurrentController::class, 'getCurrentData1']);
    Route::get('/json-current2', [CurrentController::class, 'getCurrentData2']);
    Route::get('/json-current3', [CurrentController::class, 'getCurrentData3']);
    Route::get('/json-current4', [CurrentController::class, 'getCurrentData4']);

    // Routes for Humidity
    Route::get('/humidity', [HumidityController::class, 'index'])->name('humidity');
    Route::get('/json-humidity1', [HumidityController::class, 'getHumidityData1']);
    Route::get('/json-humidity2', [HumidityController::class, 'getHumidityData2']);
    Route::get('/json-humidity3', [HumidityController::class, 'getHumidityData3']);
    Route::get('/json-humidity4', [HumidityController::class, 'getHumidityData4']);

    // Routes for Temperature
    Route::get('/temperature', [TemperatureController::class, 'index'])->name('temperature');
    Route::get('/json-temperature1', [TemperatureController::class, 'getTemperatureData1']);
    Route::get('/json-temperature2', [TemperatureController::class, 'getTemperatureData2']);
    Route::get('/json-temperature3', [TemperatureController::class, 'getTemperatureData3']);
    Route::get('/json-temperature4', [TemperatureController::class, 'getTemperatureData4']);

    // Routes for Resistance
    Route::get('/resistance', [ResistanceController::class, 'index'])->name('resistance');
    Route::get('/json-resistance1', [ResistanceController::class, 'getResistanceData1']);
    Route::get('/json-resistance2', [ResistanceController::class, 'getResistanceData2']);
    Route::get('/json-resistance3', [ResistanceController::class, 'getResistanceData3']);
    Route::get('/json-resistance4', [ResistanceController::class, 'getResistanceData4']);

    // Routes for Power
    Route::get('/power', [PowerController::class, 'index'])->name('power');
    Route::get('/json-power1', [PowerController::class, 'getPowerData1']);
    Route::get('/json-power2', [PowerController::class, 'getPowerData2']);
    Route::get('/json-power3', [PowerController::class, 'getPowerData3']);
    Route::get('/json-power4', [PowerController::class, 'getPowerData4']);
});
