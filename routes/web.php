<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'show');
    Route::post('/login', 'login');
});
