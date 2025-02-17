<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('list', function () {
    return view ('list');
});
Route::get('user1', function () {
    return view ('user1');
});
Route::get('user2', function () {
    return view ('user2');
});