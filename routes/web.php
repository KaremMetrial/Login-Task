<?php

use Illuminate\Support\Facades\Route;

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'show');
    Route::post('/login', 'login');
});
