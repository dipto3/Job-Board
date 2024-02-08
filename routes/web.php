<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
<<<<<<< HEAD
use App\Http\Controllers\CompanyLoginController;
=======
use App\Http\Controllers\Admin\JobController;
use Illuminate\Support\Facades\Route;
>>>>>>> ca58b1ae0037053f8c607786383406090be89bc3

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

Route::get('/', function () {
    return view('welcome');
});
//Admin routes...
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//Admin auth
Route::get('/admin/login', [AdminAuthController::class, 'loginPage'])->name('login.page');
Route::post('/admin/login-check', [AdminAuthController::class, 'login'])->name('login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');
<<<<<<< HEAD


Route::get('/register', [CompanyAuthController::class, 'registerPage']);
Route::post('/register',[CompanyAuthController::class,'registerpost']);
Route::get('/login-page',[CompanyLoginController::class,'loginpage']);
Route::post('/login',[CompanyLoginController::class,'loginpost']);

=======
//Jobs
Route::get('/job-create', [JobController::class, 'create'])->name('job.create');
Route::get('/job-index', [JobController::class, 'index'])->name('job.index');
>>>>>>> ca58b1ae0037053f8c607786383406090be89bc3
