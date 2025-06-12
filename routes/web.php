<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', UsersController::class . '@index')->name('users.index');
Route::post('/import', [UsersController::class, 'import'])->name('users.import');
Route::get('/send-email', [UsersController::class, 'sendEmail'])->name('users.send');
Route::post('/send-email', [UsersController::class, 'sendEmailPost'])->name('users.sendEmail');

