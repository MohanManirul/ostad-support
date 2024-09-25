<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/",[SiteController::class,'HomePage']);
Route::get("/course",[SiteController::class,'CoursesPage']);
Route::get("/about",[SiteController::class,'AboutPage']);
Route::get("/signin",[SiteController::class,'SignInPage']);
Route::get("/signup",[SiteController::class,'SignUpPage']);
