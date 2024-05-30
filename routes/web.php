<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/tak', [App\Http\Controllers\TaskController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::resource('/task', TaskController::class);
    Route::patch('todos/{todo}/status', [TaskController::class, 'updateStatus']);
});

// Route Artisan Call
Route::get('/artisan-call', function() {
    Artisan::call('storage:link');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return 'success';
});