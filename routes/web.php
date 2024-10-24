<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;

Route::resource('jobs', JobController::class);
Route::get('/', [HomeController::class, 'index']);
