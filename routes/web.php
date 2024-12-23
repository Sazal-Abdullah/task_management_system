<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\TaskController;


// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/', [HomeController::class, 'index'])->name('home');


// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    // routes/web.php





});






Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
});
