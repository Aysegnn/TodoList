<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

//Auth Routes

Route::get('/', [UserAuthController::class, 'index']); 
Route::get('login', [UserAuthController::class, 'login'])->name('login');
Route::post('user-login', [UserAuthController::class, 'userLogin'])->name('login.user'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('register');
Route::post('user-registration', [UserAuthController::class, 'userRegistration'])->name('register.user'); 
Route::get('signout', [UserAuthController::class, 'signOut'])->name('signout');