<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/',[FormController::class,'index']);
Route::get('form/create',[FormController::class,'create']);
Route::post('form/store',[FormController::class,'store']);
Route::get('form/{id}/edit',[FormController::class,'edit']);
Route::put('form/{id}/update',[FormController::class,'update']);
Route::get('form/{id}/delete',[FormController::class,'delete']);
