<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Company\CompanyAuthController;
use App\Http\Controllers\Company\CompanyLoginController;
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


//Company routes...

//Company auth
Route::get('/company/register', [CompanyAuthController::class, 'registerPage'])->name('company.register.page');
Route::post('/company/register',[CompanyAuthController::class,'registerpost'])->name('company.register');
Route::get('/company/login-page',[CompanyLoginController::class,'loginpage'])->name('company.login.page');
Route::post('/company/login',[CompanyLoginController::class,'loginpost'])->name('company.login');


//Jobs
Route::get('/job-create', [JobController::class, 'create'])->name('job.create');
Route::get('/job-index', [JobController::class, 'index'])->name('job.index');
