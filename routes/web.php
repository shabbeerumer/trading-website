<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// route for user
Route::get('/userpage', [UserController::class, 'index'])->name('userpage');
Route::get('/usersignin', [UserController::class, 'pageshowsignin'])->name('pageshowsignin');
Route::get('/userlogin', [UserController::class, 'pageshowlogin'])->name('pageshowlogin');
Route::post('/userregister', [UserController::class, 'register'])->name('userdataregister');
Route::post('/userlogin', [UserController::class, 'login'])->name('userlogin');
Route::get('/usertrading', [UserController::class, 'showtrading'])->name('showtrading');

// google route
Route::get('auth/google', [UserController::class, 'redirectToGoogle'])->name('google.auth');
Route::get('auth/google/callback', [UserController::class, 'handleGoogleCallback'])->name('google.callback');

// github route
Route::get('auth/github', [UserController::class, 'redirectTogithub'])->name('github.auth');
Route::get('auth/github/callback', [UserController::class, 'handlegithubCallback'])->name('github.callback');




// route for admin
Route::get('/adminpage', [AdminController::class, 'index'])->name('adminpage');
Route::get('/adminlogin', [AdminController::class, 'adminpagelogin'])->name('adminpagelogin');
Route::post('/admindatapost', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::get('/adminanalytics', [AdminController::class, 'adminanalytics'])->name('adminanalytics');
