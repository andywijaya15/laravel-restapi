<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

/**
 * route "/register"
 * @method "POST"
 */
Route::post('register', RegisterController::class);

/**
 * route "/login"
 * @method "POST"
 */
Route::post('login', LoginController::class);

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('user', UserController::class);
