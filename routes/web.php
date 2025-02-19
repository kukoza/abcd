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
Route::get('/Baramet', [App\Http\Controllers\UserController::class,'User3']);
Route::get('/Deacha', [App\Http\Controllers\UserController::class,'User4']);
Route::get('/Naris', [App\Http\Controllers\UserController::class,'User5']);
Route::get('/Nuttapong', [App\Http\Controllers\UserController::class,'User6']);
Route::get('/Piyanat', [App\Http\Controllers\UserController::class,'User7']);
Route::get('/Pornthawee', [App\Http\Controllers\UserController::class,'User8']);
Route::get('/Sukchai', [App\Http\Controllers\UserController::class,'User9']);
Route::get('/Teerasak', [App\Http\Controllers\UserController::class,'User10']);
Route::get('/Thanakorn', [App\Http\Controllers\UserController::class,'User11']);
Route::get('/Thumrong', [App\Http\Controllers\UserController::class,'User12']);
Route::get('/Orakran', [App\Http\Controllers\UserController::class,'User13']);
Route::get('/Threechada', [App\Http\Controllers\UserController::class,'User14']);
Route::get('/Wannisa', [App\Http\Controllers\UserController::class,'User15']);
Route::get('/Wiroj', [App\Http\Controllers\UserController::class,'User16']);
Route::get('/Channarong', [App\Http\Controllers\UserController::class,'User17']);