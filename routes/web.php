<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\LeaveApplicationController::class,'index'])->name('home');
Route::post('/', [\App\Http\Controllers\LeaveApplicationController::class,'createApplication'])->name('createLeaveApplication');
