<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Company\CompanyAuthController;
use App\Http\Controllers\Company\CompanyLoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Frontend\JobController as FrontendJobController;

use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Frontend\SubscriberController;

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

Route::get('/job/{uuid}', [FrontendJobController::class, 'jobDetails'])->name('job.description');

//Admin routes...
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//Admin auth
Route::get('/admin/login', [AdminAuthController::class, 'loginPage'])->name('login.page');
Route::post('/admin/login-check', [AdminAuthController::class, 'login'])->name('login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');

//Admin manage users
Route::get('/admin/show-user/company', [UserManageController::class, 'index'])->name('show.user.company');
Route::post('/company/accept_account/{encryptedUserId}', [UserManageController::class, 'accept_account'])->name('update.active.account');

//Company routes...

//Company auth
Route::get('/company/register', [CompanyAuthController::class, 'registerPage'])->name('company.register.page');
Route::post('/company/register', [CompanyAuthController::class, 'registerPost'])->name('company.register');
Route::get('/company/login-page', [CompanyLoginController::class, 'loginpage'])->name('company.login.page');
Route::get('/not-approve', [CompanyLoginController::class, 'notApprove'])->name('company.pending');
Route::post('/company/login', [CompanyLoginController::class, 'loginpost'])->name('company.login');

Route::post('/company/login', [SubscriberController::class, 'store'])->name('subscriber.store');
//Jobs
Route::get('/job-create', [JobController::class, 'create'])->name('job.create');
Route::post('/job-store', [JobController::class, 'store'])->name('job.store');
Route::get('/job-index', [JobController::class, 'index'])->name('job.index');
Route::get('/job-details/{id}', [JobController::class, 'details'])->name('job.details');
Route::get('/job-edit/{id}', [JobController::class, 'edit'])->name('job.edit');
Route::put('/job-update/{id}', [JobController::class, 'update'])->name('job.update');
Route::delete('/job-destroy/{id}', [JobController::class, 'destroy'])->name('job.destroy');
Route::post('/job-status', [JobController::class, 'status'])->name('job.status');
