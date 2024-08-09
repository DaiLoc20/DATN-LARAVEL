<?php


use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
Route::apiResource('categories', CategoryController::class);
Route::get('/data', 'ApiController@getData');
Route::get('/categories', [CategoryController::class, 'index']);



