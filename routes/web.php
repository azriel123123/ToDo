<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/tak', [App\Http\Controllers\TaskController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::resource('/task', TaskController::class);
    Route::patch('todos/{todo}/status', [TaskController::class, 'updateStatus']);
});