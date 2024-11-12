<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\LeaveApplicationController::class,'index'])->name('home');
Route::post('/', [\App\Http\Controllers\LeaveApplicationController::class,'createApplication'])->name('createLeaveApplication');
Route::get('/leave-applications', [\App\Http\Controllers\LeaveApplicationController::class,'showApplications'])->name('showApplications');
Route::get('/approve/{id}', [\App\Http\Controllers\LeaveApplicationController::class,'approve'])->name('approve');
Route::get('/reject/{id}', [\App\Http\Controllers\LeaveApplicationController::class,'reject'])->name('reject');
Route::get('/search', [\App\Http\Controllers\LeaveApplicationController::class, 'search'])->name('search');
