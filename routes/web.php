<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;




Route::get('/h',[HomeController::class,'home']);
Route::get('/u',[HomeController::class,'house']);
Route::get('/w',[HomeController::class,'how']);
Route::get('/create-slider',[HomeController::class,'create']);
