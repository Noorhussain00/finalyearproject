<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmailContactController;
use App\Http\Controllers\DoctorRegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware; // Import AdminMiddleware for user access control

// Default route
Route::get('/', function () {
    return view('welcome');
});

// User registration routes
Route::get('register', [UserController::class, 'showRegisterForm'])->name('register.form');
Route::post('register', [UserController::class, 'register'])->name('register');

// User login routes
Route::get('login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [UserController::class, 'login'])->name('login');

// User dashboard route
Route::get('dashboard', [UserController::class, 'dashboard'])->name('user.dashboard')->middleware('auth:web');

// Doctor login routes (login for doctor using same form but with role distinction)
Route::post('login/doctor', [UserController::class, 'login'])->name('doctor.login');

// Doctor dashboard route (after login)
Route::get('/doctor-registration-dashboard', [DoctorRegistrationController::class, 'dashboard'])
    ->name('doctor.registration.dashboard')
    ->middleware('auth:doctor');

// Logout route (logs out either a user or doctor)
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Route to show student (optional, based on your app logic)
Route::get('/student', [UserController::class, 'showStudent'])->name('student');

// this is for Doctor registration reigster routes
Route::get('/doctorregister', [DoctorRegistrationController::class, 'showForm'])->name('doctor_registration.form');
Route::post('/doctorregister', [DoctorRegistrationController::class, 'store'])->name('doctor_registration.store');

// this is for Doctor list and deletion routes (for admin or other purposes)
Route::get('/doctorlist', [DoctorRegistrationController::class, 'show'])->name('doctor_registration.show');
Route::delete('/doctor/{id}', [DoctorRegistrationController::class, 'destroy'])->name('doctor.delete');

// this is for doctor form routes (if needed for additional doctor-related actions)
Route::get('/doctorform', [DoctorController::class, 'showForm'])->name('doctor.form');
Route::post('/doctorstore', [DoctorController::class, 'store'])->name('doctor.store');
Route::get('/doctorshow', [DoctorController::class, 'showDoctors'])->name('doctor.show');
Route::delete('/doctors/{id}', [DoctorController::class, 'destroy'])->name('formdoctor.delete');

// Admin dashboard routes (accessible only to admins)
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    // Admin Dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Manage Users routeD
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::post('/admin/users/{id}/toggle-status', [AdminController::class, 'toggleUserStatus'])->name('admin.toggleUserStatus');

    Route::get('/admin/users/manage', [AdminController::class, 'manageUsers'])->name('admin.manageUsers');

    // Route to delete a user
    Route::delete('/admin/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
});

//email routes
Route::get('/contact', [EmailContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [EmailContactController::class, 'sendEmail'])->name('send.email');





Route::view('page', 'admin.admindashboard');
Route::view('landingpage', 'Landing.Landingpage');
Route::view('Registered', 'UserRegistrationForm.UserRegister');
Route::view('drRegistrationForm', 'DrRegistrationForm.DrRegistrationForm');



Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
