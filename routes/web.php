<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/trainings', 'pages.trainings');
Route::view('/about', 'pages.about');
Route::view('/blogs', 'pages.blogs');