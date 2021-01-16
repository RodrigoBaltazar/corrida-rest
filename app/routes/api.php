<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RunnerController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\RaceRunnerController;
use App\Http\Controllers\RunnerResultController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('runners', [RunnerController::class,'store']);

Route::post('races', [RaceController::class,'store']);

Route::post('raceRunners', [RaceRunnerController::class,'store']);

Route::post('runnerResults', [RunnerResultController::class,'store']);

Route::get('byAge', [RankingController::class, 'byAge']);

Route::get('general', [RankingController::class, 'general']);
