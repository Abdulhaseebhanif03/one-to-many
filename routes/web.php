<?php
use App\Http\Controllers\UserController;
// role 
use App\Http\Controllers\RoleController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);