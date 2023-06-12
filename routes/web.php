<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/','insertRead');
Route::post('insertData',[mycontroller::class,'insert']);
Route::get('/',[mycontroller::class,'readdata']);
Route::view('update','updateview');