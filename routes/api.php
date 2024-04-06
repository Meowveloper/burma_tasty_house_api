<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//localhost:8000/api/user/login

Route::prefix('user')->group(function () {
    Route::post('login', [UserController::class, 'login']);
});
