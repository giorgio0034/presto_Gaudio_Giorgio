<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;




//PublicController

Route::get('/',[PublicController::class,'home'])->name('home');



//AdsController


Route::get('/ad/create',[AdController::class,'create'])->name('ad.create')->middleware('auth');
Route::post('/ad/store',[AdController::class,'store'])->name('ad.store')->middleware('auth');
Route::get('/ad/index',[AdController::class,'index'])->name('ad.index');

Route::get('/show/ad/{ad}',[AdController::class,'show'])->name('ad.show');
Route::get('/category/{category}',[AdController::class,'byCategory'])->name('ad.byCategory');

Route::get('/revisor/index',[RevisorController::class,'index'])->name('revisor.index');
