<?php

Route::post('auth/login', AuthController::class . '@login');

Route::group(['middleware' => 'auth:api'], function ($router) {
    Route::resource('clients', ClientController::class);
    Route::get('withdraws', TotalWithdrawalsController::class . '@index');
    Route::get('deposits', TotalDepositsController::class . '@index');
    Route::get('transfers', TotalTransfersController::class . '@index');
});
