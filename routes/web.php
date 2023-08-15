<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[App\Http\Controllers\TodoController::class,'index']);

Route::POST('/create',[App\Http\Controllers\TodoController::class,'store']);
Route::get('/confirmation',[App\Http\Controllers\TodoController::class,'form']);
