<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello World";
});

Route::get('/users', function () {
    return "Users";
});

Route::get('/users/{id}', function ($id) {
    return "Details of user $id";
})->where('id', '[\d]+');

Route::get('/users/new', function () {
    return "New User";
});

Route::get('greeting/{name}/{nickname?}', function ($name, $nickname = null) {
    $name = ucfirst($name);
    return "Hello $name. " . ($nickname !== null ? "Your nickname is $nickname." : '');
});
