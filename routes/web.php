<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.register');
});

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');


Route::get('/in', [AttendanceController::class, 'in'])->name('attendance.in');
Route::post('/in', [AttendanceController::class, 'inStore'])->name('attendance.in.submit');

Route::get('/out', [AttendanceController::class, 'out'])->name('attendance.out');
Route::post('/out', [AttendanceController::class, 'outStore'])->name('attendance.out.submit');