<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Frontend Routes...
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

//Admin routes...
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//Admin auth
Route::get('/admin/login', [AdminAuthController::class, 'loginPage'])->name('login.page');
Route::post('/admin/login-check', [AdminAuthController::class, 'login'])->name('login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');
//Jobs
Route::get('/job-create', [JobController::class, 'create'])->name('job.create');
Route::post('/job-store', [JobController::class, 'store'])->name('job.store');
Route::get('/job-index', [JobController::class, 'index'])->name('job.index');
Route::get('/job-details/{id}', [JobController::class, 'details'])->name('job.details');
Route::get('/job-edit/{id}', [JobController::class, 'edit'])->name('job.edit');
Route::put('/job-update/{id}', [JobController::class, 'update'])->name('job.update');
Route::delete('/job-destroy/{id}', [JobController::class, 'destroy'])->name('job.destroy');
Route::post('/job-status', [JobController::class, 'status'])->name('job.status');
