<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return redirect()->route("login.create")->with("welcome", true);

});



    Route::get("dashboard", DashboardController::class)->name("dashboard.create")->middleware("auth");


require_once "auth.php";