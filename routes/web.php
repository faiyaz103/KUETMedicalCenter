<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('user.home');
});

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

Route::get('/doctors', [DoctorController::class, 'index']);

Route::get('/facilities', [FacilitiesController::class, 'index']);

Route::get('/staff', [StaffController::class, 'index']);

Route::get('/doctors-schedule', [DoctorScheduleController::class, 'index']);

// -------------------Notices----------------------

// Route to show all notices (index)
Route::get('/notices', [NoticeController::class, 'index'])->name('notices.index');

// Route to show the form to create a new notice
Route::get('/notices/create', [NoticeController::class, 'create'])->name('notices.create');

// Route to store the newly created notice
Route::post('/notices', [NoticeController::class, 'store'])->name('notices.store');

// Route to show the edit form for an existing notice
Route::get('/notices/{id}/edit', [NoticeController::class, 'edit'])->name('notices.edit');

// Route to update the existing notice
Route::put('/notices/{id}', [NoticeController::class, 'update'])->name('notices.update');

// Route to delete a notice
Route::delete('/notices/{id}', [NoticeController::class, 'destroy'])->name('notices.destroy');

// Route to view the individual notice (open PDF)
Route::get('/notices/{id}', [NoticeController::class, 'show'])->name('notices.show');
// --------------------------------------------------


Route::get('/bloodbank', function () {
    return view('user.bloodbank');
});

Route::get('/medcertificate', function () {
    return view('user.medcertificate');
});

// Route::get('/notices', function () {
//     return view('user.notices');
// });

//Auth

Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);

Route::get('/login',[SessionController::class, 'create']);
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);