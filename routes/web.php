<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


// -------- Auth Route -----------
Route::get('login', [AuthController::class,'login']);
Route::post('admin/user-login', [AuthController::class,'userLogin']);

Route::get('teacher-register', [AuthController::class,'teacherRegister']);
Route::post('admin/teacher-registration', [AuthController::class,'registrationTeacher']);

Route::get('student-register', [AuthController::class,'studentRegister']);
Route::post('admin/student-registration', [AuthController::class,'registrationStudent']);
