<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AppVersion;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\priceController;
use App\Http\Controllers\Api\V1\ConfigController;
use App\Http\Controllers\Api\V1\deviceController;

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

Route::prefix("v1")->group(function(){

    Route::post("devices", [deviceController::class, "store"])->middleware("auth:sanctum");
        
    Route::get("version", AppVersion::class);

    Route::get("products", [priceController::class ,"index"]);

    Route::get("products/{category}", [priceController::class, "show"]);

    Route::get("configs", [ConfigController::class, "index"]); 

    Route::get("configs/{config}", [ConfigController::class, "destroy"]);
});

Route::post("login", [AuthController::class, "login"]);