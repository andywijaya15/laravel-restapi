<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
 * route "/logout"
 * @method "POST"
 */
Route::post('logout', LogoutController::class);

/**
 * route "/user"
 * @method "GET"
 */
Route::middleware('auth:api')->get('user', UserController::class);
