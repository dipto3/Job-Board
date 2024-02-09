<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\CompanyLoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;


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



Route::get('/register', [CompanyAuthController::class, 'registerPage']);
Route::post('/register',[CompanyAuthController::class,'registerpost']);
Route::get('/login-page',[CompanyLoginController::class,'loginpage']);
Route::post('/login',[CompanyLoginController::class,'loginpost']);


//Jobs
Route::get('/job-create', [JobController::class, 'create'])->name('job.create');
Route::get('/job-index', [JobController::class, 'index'])->name('job.index');
