<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VpnController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\deviceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\UpdatePasswordController;


Route::get('/', function () {
    return redirect()->route("login.create")->with("welcome", true);
});

Route::middleware(["auth"])->group(function(){

    Route::get("dashboard", DashboardController::class)->name("dashboard.create");

    Route::get("UpdatePassword", [UpdatePasswordController::class, "changePasswordForm"])->name("updatePassword.form");

    Route::post("UpdatePassword", [UpdatePasswordController::class, "updatePassword"])->name("updatePassword.store");

    Route::get("devices", [deviceController::class, "index"])->name("devices.index");

    Route::get("devices/create", [deviceController::class, "create"])->name("devices.create"); 

    Route::get("products", [CategoryController::class, "index"])->name("products.index");
    
    Route::get("products/create", [CategoryController::class, "create"])->name("products.create");

    Route::post("products", [CategoryController::class, "store"])->name("products.store");

    Route::get("products/{price}", [CategoryController::class, "show"])->name("products.show");

    Route::get("products/{price}/edit", [CategoryController::class, "edit"])->name("products.edit");

    Route::post("products/{price}", [CategoryController::class, "update"])->name("products.update");

    Route::post("products{price}", [CategoryController::class, "destroy"])->name("products.destroy");

    Route::get("configs", [ConfigController::class, "index"])->name("configs.index"); 

    Route::get("configs/create", [ConfigController::class, "create"])->name("configs.create");

    Route::post("configs", [ConfigController::class, "store"])->name("configs.store");

    Route::post("configs/{config}", [ConfigController::class, "destroy"])->name("configs.destroy");

    Route::post("pay", [PaymentController::class, "add_order"]);
    
    Route::post("verifyPay", [PaymentController::class, "VerifyPayment"]);

    Route::get("gifts", [VpnController::class, "index"]);
});

require_once "auth.php";