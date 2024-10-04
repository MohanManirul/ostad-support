<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\OstadMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});



// How to implement middleware (Specific Routing)
Route::get("/info",[ProfileController::class,'MyInfo']);


// How to implement middleware (Group Routing)
Route::middleware([OstadMiddleware::class])->group(function (){
    Route::get("/info1",[ProfileController::class,'MyInfo1']);
    Route::get("/info2",[ProfileController::class,'MyInfo2']);
    Route::get("/info3",[ProfileController::class,'MyInfo3']);
    //
    //
    //
    //
});




/*
Route::get("/info",[ProfileController::class,'MyInfo']);
Route::get("/info1",[ProfileController::class,'MyInfo1']);
Route::get("/info2",[ProfileController::class,'MyInfo2']);
Route::get("/info3",[ProfileController::class,'MyInfo3']);
*/
