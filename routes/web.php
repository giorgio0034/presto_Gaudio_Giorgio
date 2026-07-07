<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;




//PublicController

Route::get('/',[PublicController::class,'home'])->name('home');



//AdsController


Route::get('/ads/create',[AdController::class,'create'])->name('ads.create')->middleware('auth');
Route::get('/ads/store',[AdController::class,'store'])->name('ads.store')->middleware('auth');
Route::get('/ads/index',[AdController::class,'index'])->name('ads.index')->middleware('auth');

