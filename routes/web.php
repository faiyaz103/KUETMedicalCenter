<?php

use App\Http\Controllers\BloodBankController;
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
use App\Http\Controllers\TestsController;
use App\Http\Controllers\UnitsController;
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

Route::middleware(['auth', 'verified', 'student'])->group( function(){

// ------------------Feedback-------------------
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


// -------------------Blood Bank------------------
// Home
Route::get('/blood-bank', function () {
    return view('student.bloodbank');
})->name('bloodbank.home');
// List
Route::get('/blood-bank/donors/{bloodtype}', [BloodBankController::class, 'index'])->name('donor.index');
// Register/Update View
Route::get('/blood-bank/donor/edit', [BloodBankController::class, 'edit'])->name('donor.edit');
// Register/Update
Route::put('/blood-bank/donor/update', [BloodBankController::class, 'update'])->name('donor.update');
// Delete Donor
Route::delete('/blood-bank/donor/delete', [BloodBankController::class, 'destroy'])->name('donor.destroy');

});

// $$$$$$$$$$$$$$$$$$$$$$ STUDENT $$$$$$$$$$$$$$$$$$$$$$$$$




// @@@@@@@@@@@@@@@@@@@@@@@ ADMIN @@@@@@@@@@@@@@@@@@@@@@@@@@@@

Route::middleware(['auth', 'verified', 'admin'])->group( function(){

// _______________________Admin Homepage_________________
// Homepage
Route::get('/admin/dashboard', [ContactController::class, 'list'])->name('admin.dashboard');
// Update Contact/Basic Info
Route::post('/admin/dashboard/update', [ContactController::class, 'storeOrUpdate'])->name('contact.storeorupdate');


// _______________________Doctors_________________________
// Show list
Route::get('/admin/doctors', [DoctorController::class, 'list'])->name('doctors.list');
// Route to show the form to create a new one
Route::get('/admin/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
// Route to store the newly created one
Route::post('/admin/doctors', [DoctorController::class, 'store'])->name('doctors.store');
// Route to show the edit form for an existing one
Route::get('/admin/doctors/{id}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
// Route to update the existing one
Route::put('/admin/doctors/{id}', [DoctorController::class, 'update'])->name('doctors.update');
// Route to delete one
Route::delete('/admin/doctors/{id}', [DoctorController::class, 'destroy'])->name('doctors.destroy');


// _______________________Doctors Schedule_________________________
// Show list
Route::get('/admin/doctors-schedule', [DoctorScheduleController::class, 'list'])->name('schedule.list');
// Route to show the form to create a new one
Route::get('/admin/doctors-schedule/{id}/edit', [DoctorScheduleController::class, 'edit'])->name('schedule.edit');
// Route to update the existing one
Route::put('/admin/doctors-schedule/{id}', [DoctorScheduleController::class, 'update'])->name('schedule.update');


// _______________________Staff_________________________
// Show list
Route::get('/admin/staff', [StaffController::class, 'list'])->name('staff.list');
// Route to show the form to create a new one
Route::get('/admin/staff/create', [StaffController::class, 'create'])->name('staff.create');
// Route to store the newly created one
Route::post('/admin/staff', [StaffController::class, 'store'])->name('staff.store');
// Route to show the edit form for an existing one
Route::get('/admin/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
// Route to update the existing one
Route::put('/admin/staff/{id}', [StaffController::class, 'update'])->name('staff.update');
// Route to delete one
Route::delete('/admin/staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');


// _______________________Units_________________________
// Show list
Route::get('/admin/units', [UnitsController::class, 'list'])->name('units.list');
// Route to show the form to create a new one
Route::get('/admin/units/create', [UnitsController::class, 'create'])->name('units.create');
// Route to store the newly created one
Route::post('/admin/units', [UnitsController::class, 'store'])->name('units.store');
// Route to show the edit form for an existing one
Route::get('/admin/units/{id}/edit', [UnitsController::class, 'edit'])->name('units.edit');
// Route to update the existing one
Route::put('/admin/units/{id}', [UnitsController::class, 'update'])->name('units.update');
// Route to delete one
Route::delete('/admin/units/{id}', [UnitsController::class, 'destroy'])->name('units.destroy');


// _______________________Tests_________________________
// Show list
Route::get('/admin/tests', [TestsController::class, 'list'])->name('tests.list');
// Route to show the form to create a new one
Route::get('/admin/tests/create', [TestsController::class, 'create'])->name('tests.create');
// Route to store the newly created one
Route::post('/admin/tests', [TestsController::class, 'store'])->name('tests.store');
// Route to show the edit form for an existing one
Route::get('/admin/tests/{id}/edit', [TestsController::class, 'edit'])->name('tests.edit');
// Route to update the existing one
Route::put('/admin/tests/{id}', [TestsController::class, 'update'])->name('tests.update');
// Route to delete one
Route::delete('/admin/tests/{id}', [TestsController::class, 'destroy'])->name('tests.destroy');


// _______________________Services_________________________
// Show list
Route::get('/admin/services', [ServiceController::class, 'list'])->name('services.list');
// Route to show the form to create a new one
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('services.create');
// Route to store the newly created one
Route::post('/admin/services', [ServiceController::class, 'store'])->name('services.store');
// Route to show the edit form for an existing one
Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
// Route to update the existing one
Route::put('/admin/services/{id}', [ServiceController::class, 'update'])->name('services.update');
// Route to delete one
Route::delete('/admin/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');


// _______________________Notice_________________________
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
