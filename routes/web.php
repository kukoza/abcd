<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('list', function () {
    return view ('list');
});
Route::get('/Keiichi', [App\Http\Controllers\UserController::class,'User1']);
Route::get('/Thaweephan', [App\Http\Controllers\UserController::class,'User2']);


