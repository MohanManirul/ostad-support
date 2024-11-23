<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/alpine','alpine.demo',['title' => 'Welcome Alpine Js']);

