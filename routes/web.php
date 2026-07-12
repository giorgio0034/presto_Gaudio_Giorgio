<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;




//PublicController

Route::get('/',[PublicController::class,'home'])->name('home');



//AdsController


Route::get('/ad/create',[AdController::class,'create'])->name('ad.create')->middleware('auth');
Route::post('/ad/store',[AdController::class,'store'])->name('ad.store')->middleware('auth');
Route::get('/ad/index',[AdController::class,'index'])->name('ad.index')->middleware('auth');

Route::get('/show/ad/{ad}',[AdController::class,'show'])->name('ad.show')->middleware('auth');
Route::get('/category/{category}',[AdController::class,'byCategory'])->name('ad.byCategory');
