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

Route::get('/revisor/index',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accept/{ad}',[RevisorController::class,'accept'])->name('accept');
Route::patch('/reject/{ad}',[RevisorController::class,'reject'])->name('reject');

Route::get('/revisor/request',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');
Route::get('/search/ad', [PublicController::class, 'searchAds'])->name('ad.search');
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
