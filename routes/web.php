<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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


Route::get('/', [JobController::class,'index'])->name('index');
Route::post('/signinprocess', [JobController::class, 'signinprocess'])->name('signin.process');

Route::get('/signin', [JobController::class,'signin'])->name('signin');
Route::get('/signup', [JobController::class,'signup'])->name('signup');
Route::post('/signupstore', [JobController::class,'signupstore'])->name('signupstore');

Route::get('/applyform', [JobController::class,'applyform'])->name('applyform');

Route::middleware(['auth', 'account.approval'])->group(function () {
    // Add other routes specific to authenticated users here

    
    Route::get('/employeedash', [JobController::class, 'employeedash'])->name('employeedash');
    Route::get('/employerdash', [JobController::class, 'employerdash'])->name('employerdash');
    Route::get('/admindash', [JobController::class, 'admindash'])->name('admindash');
});

    // Route::post('/signinprocess', [JobController::class, 'signinprocess'])->name('signin.process');
    // Route::get('/employeedash', [JobController::class, 'employeedash'])->name('employeedash');
    // Route::get('/employerdash', [JobController::class, 'employerdash'])->name('employerdash');
    // Route::get('/admindash', [JobController::class, 'admindash'])->name('admindash');

