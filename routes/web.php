<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\UpdatePasswordController;


Route::get('/', function () {
    return redirect()->route("login.create")->with("welcome", true);
});

Route::middleware(["auth"])->group(function(){

    Route::get("dashboard", DashboardController::class)->name("dashboard.create");

    Route::get("UpdatePassword", [UpdatePasswordController::class, "changePasswordForm"])->name("updatePassword.form");

    Route::post("UpdatePassword", [UpdatePasswordController::class, "updatePassword"])->name("updatePassword.store");

});



require_once "auth.php";