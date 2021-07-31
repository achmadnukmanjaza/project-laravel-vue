<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\TiketController;
use App\Http\Controllers\API\UserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/tiket', function (Request $request) {
    return $request->tiket();
});

Route::apiResources([
    'tiket' => TiketController::class,
]);

Route::apiResources([
    'user' => UserController::class,
]);
