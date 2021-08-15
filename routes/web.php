<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\TodoController;

//Auth Routes

Route::get('/', [UserAuthController::class, 'index']); 
Route::get('login', [UserAuthController::class, 'login'])->name('login');
Route::post('user-login', [UserAuthController::class, 'userLogin'])->name('login.user'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('register');
Route::post('user-registration', [UserAuthController::class, 'userRegistration'])->name('register.user'); 
Route::get('signout', [UserAuthController::class, 'signOut'])->name('signout');


//Todo Routes


Route::get('/todo',[TodoController::class,'index'])->name('todo.index');
Route::post('/todo/store',[TodoController::class,'store'])->name('todo.store');
Route::get('/complete-task',[TodoController::class,'complete'])->name('task.complete');
Route::get('/todo/show',[TodoController::class,'show'])->name('todo.show');