<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizzerController;
use App\Http\Controllers\FinalController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,"index"]);
Route::get('/question/{id}',[QuizzerController::class,"index"]);
Route::post('/check-answer',[QuizzerController::class,"check"]);
Route::get('/final',[FinalController::class,"index"]);
Route::get('/admin',[AdminController::class,"index"]);
Route::post('/add_question',[AdminController::class,"addQuestion"]);
