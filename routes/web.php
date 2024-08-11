<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
use \App\Http\Controllers\SubscriptionController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about' , function(){
    return view('about');
})->name('about');


Route::get('/ads' , function(){
  return view('ads');
})->name('ads');


Route::get('/contact' , function(){
  return view('contact');
})->name('contact');

Route::post('/otp/sendPhone', [OtpController::class, 'sendPhone'])->name('otp.sendPhone');
Route::post('/otp/sendToken', [OtpController::class, 'sendToken'])->name('otp.sendToken');
Route::get('/logout', [OtpController::class, 'logout'])->name('otp.logout');


Route::resource('files', \App\Http\Controllers\FileController::class);
Route::post('/files/store', [\App\Http\Controllers\FileController::class, 'store'])->name('files.store');
