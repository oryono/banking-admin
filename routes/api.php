<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TotalDepositsController;
use App\Http\Controllers\TotalTransfersController;
use App\Http\Controllers\TotalWithdrawalsController;

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


Route::post('auth/login', AuthController::class . '@login');


Route::group([], function ($router) {
    Route::get('clients', ClientController::class . '@index');
    Route::get('withdraws', TotalWithdrawalsController::class . '@index');
    Route::get('deposits', TotalDepositsController::class . '@index');
    Route::get('transfers', TotalTransfersController::class . '@index');
});
