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
    Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');


    Route::get('/table', [TableController::class, 'index'])->name('table');

    Route::get('/voltage', [VoltageController::class, 'index'])->name('voltage');
    Route::get('/json-voltage1', [VoltageController::class, 'getVoltageData1']);
    Route::get('/json-voltage2', [VoltageController::class, 'getVoltageData2']);
    Route::get('/json-voltage3', [VoltageController::class, 'getVoltageData3']);
    Route::get('/json-voltage4', [VoltageController::class, 'getVoltageData4']);
    Route::get('/json-voltage5', [VoltageController::class, 'getVoltageData5']);
    Route::get('/json-voltage6', [VoltageController::class, 'getVoltageData6']);
    Route::get('/json-voltage7', [VoltageController::class, 'getVoltageData7']);
    Route::get('/json-voltage8', [VoltageController::class, 'getVoltageData8']);

        // Routes for Current
    
    Route::get('/current', [CurrentController::class, 'index'])->name('current');
    Route::get('/json-current1', [CurrentController::class, 'getCurrentData1']);
    Route::get('/json-current2', [CurrentController::class, 'getCurrentData2']);
    Route::get('/json-current3', [CurrentController::class, 'getCurrentData3']);
    Route::get('/json-current4', [CurrentController::class, 'getCurrentData4']);
    Route::get('/json-current5', [CurrentController::class, 'getCurrentData5']);
    Route::get('/json-current6', [CurrentController::class, 'getCurrentData6']);
    Route::get('/json-current7', [CurrentController::class, 'getCurrentData7']);
    Route::get('/json-current8', [CurrentController::class, 'getCurrentData8']);

    // Routes for Humidity
    Route::get('/humidity', [HumidityController::class, 'index'])->name('humidity');
    Route::get('/json-humidity1', [HumidityController::class, 'getHumidityData1']);
    Route::get('/json-humidity2', [HumidityController::class, 'getHumidityData2']);
    Route::get('/json-humidity3', [HumidityController::class, 'getHumidityData3']);
    Route::get('/json-humidity4', [HumidityController::class, 'getHumidityData4']);
    Route::get('/json-humidity5', [HumidityController::class, 'getHumidityData5']);
    Route::get('/json-humidity6', [HumidityController::class, 'getHumidityData6']);
    Route::get('/json-humidity7', [HumidityController::class, 'getHumidityData7']);
    Route::get('/json-humidity8', [HumidityController::class, 'getHumidityData8']);

    // Routes for Temperature
    Route::get('/temperature', [TemperatureController::class, 'index'])->name('temperature');
    Route::get('/json-temperature1', [TemperatureController::class, 'getTemperatureData1']);
    Route::get('/json-temperature2', [TemperatureController::class, 'getTemperatureData2']);
    Route::get('/json-temperature3', [TemperatureController::class, 'getTemperatureData3']);
    Route::get('/json-temperature4', [TemperatureController::class, 'getTemperatureData4']);
    Route::get('/json-temperature5', [TemperatureController::class, 'getTemperatureData5']);
    Route::get('/json-temperature6', [TemperatureController::class, 'getTemperatureData6']);
    Route::get('/json-temperature7', [TemperatureController::class, 'getTemperatureData7']);
    Route::get('/json-temperature8', [TemperatureController::class, 'getTemperatureData8']);

    // Routes for Resistance
    Route::get('/resistance', [ResistanceController::class, 'index'])->name('resistance');
    Route::get('/json-resistance1', [ResistanceController::class, 'getResistanceData1']);
    Route::get('/json-resistance2', [ResistanceController::class, 'getResistanceData2']);
    Route::get('/json-resistance3', [ResistanceController::class, 'getResistanceData3']);
    Route::get('/json-resistance4', [ResistanceController::class, 'getResistanceData4']);
    Route::get('/json-resistance5', [ResistanceController::class, 'getResistanceData5']);
    Route::get('/json-resistance6', [ResistanceController::class, 'getResistanceData6']);
    Route::get('/json-resistance7', [ResistanceController::class, 'getResistanceData7']);
    Route::get('/json-resistance8', [ResistanceController::class, 'getResistanceData8']);

    // Routes for Power
    Route::get('/power', [PowerController::class, 'index'])->name('power');
    Route::get('/json-power1', [PowerController::class, 'getPowerData1']);
    Route::get('/json-power2', [PowerController::class, 'getPowerData2']);
    Route::get('/json-power3', [PowerController::class, 'getPowerData3']);
    Route::get('/json-power4', [PowerController::class, 'getPowerData4']);
    Route::get('/json-power5', [PowerController::class, 'getPowerData5']);
    Route::get('/json-power6', [PowerController::class, 'getPowerData6']);
    Route::get('/json-power7', [PowerController::class, 'getPowerData7']);
    Route::get('/json-power8', [PowerController::class, 'getPowerData8']);



    Route::get('/community/profile', function () {
        return view('pages/community/profile');
    })->name('profile');
    Route::get('/community/feed', function () {
        return view('pages/community/feed');
    })->name('feed');     
    Route::get('/community/forum', function () {
        return view('pages/community/forum');
    })->name('forum');
    Route::get('/community/forum-post', function () {
        return view('pages/community/forum-post');
    })->name('forum-post');    
    Route::get('/community/meetups', function () {
        return view('pages/community/meetups');
    })->name('meetups');    
    Route::get('/community/meetups-post', function () {
        return view('pages/community/meetups-post');
    })->name('meetups-post');    
    Route::get('/finance/cards', function () {
        return view('pages/finance/credit-cards');
    })->name('credit-cards');

    Route::get('/job/job-post', function () {
        return view('pages/job/job-post');
    })->name('job-post');    
    Route::get('/job/company-profile', function () {
        return view('pages/job/company-profile');
    })->name('company-profile');
    Route::get('/messages', function () {
        return view('pages/messages');
    })->name('messages');
    Route::get('/tasks/kanban', function () {
        return view('pages/tasks/tasks-kanban');
    })->name('tasks-kanban');
    Route::get('/tasks/list', function () {
        return view('pages/tasks/tasks-list');
    })->name('tasks-list');       
    Route::get('/inbox', function () {
        return view('pages/inbox');
    })->name('inbox'); 
    Route::get('/calendar', function () {
        return view('pages/calendar');
    })->name('calendar'); 
    Route::get('/settings/account', function () {
        return view('pages/settings/account');
    })->name('account');  
    Route::get('/settings/notifications', function () {
        return view('pages/settings/notifications');
    })->name('notifications');  
    Route::get('/settings/apps', function () {
        return view('pages/settings/apps');
    })->name('apps');
    Route::get('/settings/plans', function () {
        return view('pages/settings/plans');
    })->name('plans');      
    Route::get('/settings/billing', function () {
        return view('pages/settings/billing');
    })->name('billing');  
    Route::get('/settings/feedback', function () {
        return view('pages/settings/feedback');
    })->name('feedback');
    Route::get('/utility/changelog', function () {
        return view('pages/utility/changelog');
    })->name('changelog');  
    Route::get('/utility/roadmap', function () {
        return view('pages/utility/roadmap');
    })->name('roadmap');  
    Route::get('/utility/faqs', function () {
        return view('pages/utility/faqs');
    })->name('faqs');  
    Route::get('/utility/empty-state', function () {
        return view('pages/utility/empty-state');
    })->name('empty-state');  
    Route::get('/utility/404', function () {
        return view('pages/utility/404');
    })->name('404');
    Route::get('/utility/knowledge-base', function () {
        return view('pages/utility/knowledge-base');
    })->name('knowledge-base');
    Route::get('/onboarding-01', function () {
        return view('pages/onboarding-01');
    })->name('onboarding-01');   
    Route::get('/onboarding-02', function () {
        return view('pages/onboarding-02');
    })->name('onboarding-02');   
    Route::get('/onboarding-03', function () {
        return view('pages/onboarding-03');
    })->name('onboarding-03');   
    Route::get('/onboarding-04', function () {
        return view('pages/onboarding-04');
    })->name('onboarding-04');
    Route::get('/component/button', function () {
        return view('pages/component/button-page');
    })->name('button-page');
    Route::get('/component/form', function () {
        return view('pages/component/form-page');
    })->name('form-page');
    Route::get('/component/dropdown', function () {
        return view('pages/component/dropdown-page');
    })->name('dropdown-page');
    Route::get('/component/alert', function () {
        return view('pages/component/alert-page');
    })->name('alert-page');
    Route::get('/component/modal', function () {
        return view('pages/component/modal-page');
    })->name('modal-page'); 
    Route::get('/component/pagination', function () {
        return view('pages/component/pagination-page');
    })->name('pagination-page');
    Route::get('/component/tabs', function () {
        return view('pages/component/tabs-page');
    })->name('tabs-page');
    Route::get('/component/breadcrumb', function () {
        return view('pages/component/breadcrumb-page');
    })->name('breadcrumb-page');
    Route::get('/component/badge', function () {
        return view('pages/component/badge-page');
    })->name('badge-page'); 
    Route::get('/component/avatar', function () {
        return view('pages/component/avatar-page');
    })->name('avatar-page');
    Route::get('/component/tooltip', function () {
        return view('pages/component/tooltip-page');
    })->name('tooltip-page');
    Route::get('/component/accordion', function () {
        return view('pages/component/accordion-page');
    })->name('accordion-page');
    Route::get('/component/icons', function () {
        return view('pages/component/icons-page');
    })->name('icons-page');
    Route::fallback(function() {
        return view('pages/utility/404');
    });    
});
