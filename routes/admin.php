<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SlotController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CreditPackageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MembershipController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('users', UserController::class);
Route::resource('services', ServiceController::class);
Route::resource('categories', CategoryController::class);
Route::resource('courses', CourseController::class);
Route::resource('slots', SlotController::class);
Route::get('bookings-list', [SlotController::class, 'bookingsList'])->name('bookings.index');
Route::resource('memberships', MembershipController::class);
Route::resource('credits', CreditPackageController::class);