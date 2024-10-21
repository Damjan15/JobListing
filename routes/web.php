<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobController;

Route::get('/jobs/{id}/save', [JobController::class, 'save'])->name('jobs.save');
Route::resource('jobs', JobController::class);

Route::get('/', [HomeController::class, 'index']);
