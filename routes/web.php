<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {     return view('welcome'); });
Route::get('login', function () {     return view('login'); });
Route::get('dashboard', function () {     return view('dashboard'); });
Route::get('register', function () {     return view('register'); });



