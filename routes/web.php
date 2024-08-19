<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/about', function () {
  return view('about');
})->name('about');

Route::get('/ads', function () {
  return view('ads');
})->name('ads');

Route::get('/contact', function () {
  return view('contact');
})->name('contact');

// OTP routes
Route::post('/otp/sendPhone', [OtpController::class, 'sendPhone'])->name('otp.sendPhone');
Route::post('/otp/sendToken', [OtpController::class, 'sendToken'])->name('otp.sendToken');
Route::get('/logout', [OtpController::class, 'logout'])->name('otp.logout');

// File upload routes
//Route::resource('files', FileController::class);
Route::post('/files/store', [FileController::class, 'store'])->name('files.store');
Route::get('/files/index', [FileController::class, 'index'])->name('files.index');
Route::get('/dl/{file}', [FileController::class, 'DL'])->name('file.dl');

//Route::resource('posts', PostController::class)->middleware(['auth' , 'role:Legend']);
Route::resource('posts', PostController::class)->middleware(['auth']);
// Protect the post routes and file upload routes with authentication
Route::middleware('auth')->group(function () {
  // Post routes

  // Image upload routes for Editor.js
});




