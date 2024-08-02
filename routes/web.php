<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('tasks', TaskController::class);
Route::resource('categories', CategoryController::class);
