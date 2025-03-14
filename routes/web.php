<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorScheduleController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Models\Contact;

// ************************ USER ************************

// ------------------Home------------------
Route::get('/', function () {
    return view('user.home');
});

// -----------------Doctors----------------
Route::get('/doctors', [DoctorController::class, 'index']);

// -----------------Staff------------------
Route::get('/staff', [StaffController::class, 'index']);

// -----------------Facilities--------------
Route::get('/facilities', [FacilitiesController::class, 'index']);

// -----------------Doctor Visit------------
Route::get('/doctors-schedule', [DoctorScheduleController::class, 'index']);

// ---------------Other Services-------------
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// --------------Notice Board------------------
Route::get('/notices', [NoticeController::class, 'index'])->name('notices.index');

// -------------------Contact-------------------
Route::get('/contact', [ContactController::class, 'index']);

// ************************ USER ************************




// ################ AUTHENTICATED USER ###################

//-------------------Home---------------------
Route::get('/home', function () {
    return view('user.home');
})->middleware(['auth', 'verified'])->name('dashboard');

// -----------------Profile--------------------
// Profile View and Delete without verification
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Profile Update with Verification
Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');

// ################ AUTHENTICATED USER ###################




// $$$$$$$$$$$$$$$$$$$$$$ STUDENT $$$$$$$$$$$$$$$$$$$$$$$$$

// ------------------Feedback-------------------
Route::post('/feedback', [FeedbackController::class, 'store'])->middleware(['auth', 'verified', 'student'])->name('feedback.store');

// $$$$$$$$$$$$$$$$$$$$$$ STUDENT $$$$$$$$$$$$$$$$$$$$$$$$$




// @@@@@@@@@@@@@@@@@@@@@@@ ADMIN @@@@@@@@@@@@@@@@@@@@@@@@@@@@

// _____________________Home____________________________

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');

// _______________________Notice_________________________

Route::middleware(['auth', 'verified', 'admin'])->group( function(){
    // Show notice list
Route::get('/admin/notices', [NoticeController::class, 'list'])->name('notices.list');

// Route to show the form to create a new notice
Route::get('/admin/notices/create', [NoticeController::class, 'create'])->name('notices.create');

// Route to store the newly created notice
Route::post('/admin/notices', [NoticeController::class, 'store'])->name('notices.store');

// Route to show the edit form for an existing notice
Route::get('/admin/notices/{id}/edit', [NoticeController::class, 'edit'])->name('notices.edit');

// Route to update the existing notice
Route::put('/admin/notices/{id}', [NoticeController::class, 'update'])->name('notices.update');

// Route to delete a notice
Route::delete('/admin/notices/{id}', [NoticeController::class, 'destroy'])->name('notices.destroy');

// Route to view the individual notice (open PDF)
Route::get('/admin/notices/{id}', [NoticeController::class, 'show'])->name('notices.show');
});


// @@@@@@@@@@@@@@@@@@@@@@@ ADMIN @@@@@@@@@@@@@@@@@@@@@@@@@@@@





require __DIR__.'/auth.php';
