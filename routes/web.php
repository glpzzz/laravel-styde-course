<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World";
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index');
    Route::get('/user/new', 'new');
    Route::get('/user/{id}', 'show')->where(['id', '[\d]+']);
});

Route::get('greeting/{name}', [WelcomeUserController::class, 'greetingWithoutNickname']);
Route::get('greeting/{name}/{nickname}', [WelcomeUserController::class, 'greetingWithNickname']);
