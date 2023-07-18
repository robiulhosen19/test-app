<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
Route::get('home', [WebsiteController::class, 'home']);
Route::get('about', [WebsiteController::class, 'about']);
Route::get('contact', [WebsiteController::class, 'contact']);
Route::get('services', [WebsiteController::class, 'services']);



// -------- Auth Route -----------
Route::get('login', [AuthController::class, 'login']);
Route::post('admin/user-login', [AuthController::class, 'userLogin']);

Route::get('teacher-register', [AuthController::class, 'teacherRegister']);
Route::post('admin/teacher-registration', [AuthController::class, 'registrationTeacher']);

Route::get('student-register', [AuthController::class, 'studentRegister']);
Route::post('admin/student-registration', [AuthController::class, 'registrationStudent']);





Route::middleware(['checkLogin'])->group(function () {
    // -------- admin Route -----------
    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::get('table', [AdminController::class, 'table']);


    // ----------Log Out Session-----------
    Route::get('admin/logout', [AuthController::class, 'logout']);

    Route::middleware(['checkIfadmin'])->group(function () {
        // ----------Users Routes-----------
        Route::get('admin/pending-users', [UserController::class, 'pendingUsers']);
        Route::get('admin/approve-user/{userid}', [UserController::class, 'approveUser']);
    });
    
});
