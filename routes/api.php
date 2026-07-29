<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/portfolios', [\App\Http\Controllers\Api\PortfolioController::class, 'index']);
Route::get('/services', [\App\Http\Controllers\Api\ServiceController::class, 'index']);
