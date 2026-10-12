
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public homepage — opens first when visiting the website
Route::get('/', function () {
    return view('home');
})->name('home');

// Customer login
Route::get('/login', [AuthController::class, 'showCustomerLogin'])
    ->name('customer.login');

Route::post('/login', [AuthController::class, 'customerLogin'])
    ->name('customer.login.store');

// Customer registration
Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');

// Admin login
Route::get('/admin/login', [AuthController::class, 'showAdminLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'adminLogin'])
    ->name('admin.login.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Customer homepage — login required
Route::get('/home', function () {
    return view('customer.home');
})->middleware(['auth', 'role:customer'])
  ->name('customer.home');

// Admin dashboard — admin login required
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin'])
  ->name('admin.dashboard');
