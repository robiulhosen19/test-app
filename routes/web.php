<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', function () {
    return view('welcome');
});


// -------- website Route -----------
Route::get('home', [WebsiteController::class,'home']);
Route::get('about', [WebsiteController::class,'about']);
Route::get('contact', [WebsiteController::class,'contact']);
Route::get('services', [WebsiteController::class,'services']);

// -------- admin Route -----------
Route::get('deshboard', [AdminController::class,'deshboard']);
Route::get('table', [AdminController::class,'table']);
Route::get('login', [AdminController::class,'login']);
Route::get('register', [AdminController::class,'register']);
