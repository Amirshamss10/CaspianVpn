<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\deviceController;
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
    
    Route::get("product/{product}", [CategoryController::class, "show"])->name("products.show");

    Route::get("product/{product}/edit", [CategoryController::class, "edit"])->name("products.edit");
});
    
Route::get("create", function(){
    User::create([
        "name" => "Amir",
        "email" => "shamsamir3333@gmail.com",
        "password"=> Hash::make("Amir227353")
    ]);
});

require_once "auth.php";