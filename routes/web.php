<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StaffController;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/services', function () {
    return view('user.services');
});

// Route::get('/doctors', function () {
//     return view('user.doctors');
// });
Route::get('/doctors', [DoctorController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);

Route::get('/bloodbank', function () {
    return view('user.bloodbank');
});

Route::get('/medcertificate', function () {
    return view('user.medcertificate');
});

Route::get('/notices', function () {
    return view('user.notices');
});

//Auth

Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);

Route::get('/login',[SessionController::class, 'create']);
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);