<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

// Laravel Response Types
Route::get('/demo1', [DemoController::class, 'demo1']);

// Laravel Request Types
Route::get('/demo2/{name}/{city}', [DemoController::class, 'demo2']);
Route::post('/demo3', [DemoController::class, 'demo3']);

Route::post('/demo4', [DemoController::class, 'demo4']);

Route::post('/demo5', [DemoController::class, 'demo5']);

Route::post('/demo6', [DemoController::class, 'demo6']);

Route::post('/demo7', [DemoController::class, 'demo7']);


