<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedUserController;


Route::prefix("auth")->group(function(){

    Route::get("login", [AuthenticatedUserController::class, "create"])->name("login.create");

    Route::post("login", [AuthenticatedUserController::class, "store"])->name("login.store"); 

    Route::get("logout", [AuthenticatedUserController::class, "logout"])->name("user.logout");   

});