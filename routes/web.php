<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashcontroller;
use App\Http\Controllers\tableController;




Route::get('/h',[HomeController::class,'home']);
Route::get('/u',[dashcontroller::class,'house']);
Route::get('/d',[dashcontroller::class,'how']);
Route::get('/create-link',[tableController::class,'create']);
Route::match(['get','post'],'/slider-store',[tableController::class,'store']);
Route::get('/slider-index',[tableController::class,'index']);
