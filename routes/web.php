<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;


Route::get('/masuk', [AuthController::class, 'login'])->name('masuk');
Route::post('/masuk2', [AuthController::class, 'postlogin'])->name('masuk2');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [PageController::class, 'showRegister'])->name('register');
Route::get('dashboard', [PageController::class, 'showDashboard']) ->name('dashboard');
Route::get('user', [PageController::class, 'showUser']) ->name('user');
Route::get('user2', [PageController::class, 'showUser2']) ->name('user2');
Route::get('materi', [PageController::class, 'showMateri'])->name('materi');
Route::get('latsol', [PageController::class, 'showLatsol']) ->name('latsol');
Route::get('katsol', [PageController::class, 'showKatsol']) ->name('katsol');
Route::get('pembahas', [PageController::class, 'showPembahas'])->name('pembahas');
Route::get('universitas', [PageController::class, 'showUniversitas'])->name('universitas');
Route::get('akun', [PageController::class, 'showAkun'])->name('akun');



//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
