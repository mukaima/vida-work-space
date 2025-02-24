<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoomReservation;
use App\Http\Controllers\coursesReservation;

Route::get('/',function() {
   return view('welcome'); 
})->name('home');

Route::post('/message', [MessageController::class, 'store' ])->name('messages.store');


// rooms operations
Route::get('/RoomReservation/show', [RoomReservation::class, 'show' ])->name('RoomReservation.show');
Route::post('/RoomReservation', [RoomReservation::class, 'store' ])->name('RoomReservation.store');

// courses operations
Route::get('/coursesReservation/show', [CoursesReservation::class, 'show' ])->name('coursesReservation.show');
Route::post('/coursesReservation', [CoursesReservation::class, 'store' ])->name('coursesReservation.store');
