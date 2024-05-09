<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [CommandeController::class, 'index'])->name('index');
// Route::get('/show/{id}', [CommandeController::class, 'show'])->name('show');
// Route::get('/edit/{id}', [CommandeController::class, 'Edit'])->name('edit');
// Route::post('/update/{id}', [CommandeController::class, 'update'])->name('update');
Route::resource('commandes', CommandeController::class)->middleware('auth');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('postRegister', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
