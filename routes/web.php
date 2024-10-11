<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/menu', 'menu')->name('menu');
Route::view('/prenota', 'prenota')->name('prenota');
Route::view('/location', 'location')->name('location');
