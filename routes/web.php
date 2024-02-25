<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Company\CompanyAuthController;
use App\Http\Controllers\Company\CompanyLoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Frontend\JobController as FrontendJobController;
use App\Http\Controllers\Admin\UserManageController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\SslCommerzPaymentController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

//Frontend Routes...
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');

Route::get('/job/{uuid}', [FrontendJobController::class, 'jobDetails'])->name('job.description');

//Admin routes...
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//Admin auth
Route::get('/admin/login', [AdminAuthController::class, 'loginPage'])->name('login.page');
Route::post('/admin/login-check', [AdminAuthController::class, 'login'])->name('admin.login.check');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');

//Admin manage users
Route::get('/admin/show-user/company', [UserManageController::class, 'index'])->name('show.user.company');
Route::get('/company-details/{id}', [UserManageController::class, 'companyDetails'])->name('company.details');
Route::post('/company/accept_account/{encryptedUserId}', [UserManageController::class, 'accept_account'])->name('update.active.account');

Route::get('/candidate-list', [UserManageController::class, 'candidateList'])->name('candidate.list');
Route::get('/candidate-details/{id}', [UserManageController::class, 'candidateDetails'])->name('candidate.details');
Route::delete('/candidate-list/{id}', [UserManageController::class, 'candidateRemove'])->name('candidate.destroy');
Route::get('/subscribers-list', [SubscribersController::class, 'index'])->name('subscriber.list');

Route::get('/package', [PackageController::class, 'package'])->name('package');

Route::post('/package-store', [CartController::class, 'store'])->name('cart.store');
//Company routes...

//Company auth
Route::get('/company/register', [CompanyAuthController::class, 'registerPage'])->name('company.register.page');
Route::post('/company/register', [CompanyAuthController::class, 'registerPost'])->name('company.register');
Route::get('/company/login-page', [CompanyLoginController::class, 'loginpage'])->name('company.login.page');
Route::get('/not-approve', [CompanyLoginController::class, 'notApprove'])->name('company.pending');
Route::post('/company/login', [CompanyLoginController::class, 'loginpost'])->name('company.login');

Route::post('/subscriber', [SubscriberController::class, 'store'])->name('subscriber.store');
//Jobs
Route::get('/job-create', [JobController::class, 'create'])->name('job.create');
Route::post('/job-store', [JobController::class, 'store'])->name('job.store');
Route::get('/job-index', [JobController::class, 'index'])->name('job.index');
Route::get('/job-details/{id}', [JobController::class, 'details'])->name('job.details');
Route::get('/job-edit/{id}', [JobController::class, 'edit'])->name('job.edit');
Route::put('/job-update/{id}', [JobController::class, 'update'])->name('job.update');
Route::delete('/job-destroy/{id}', [JobController::class, 'destroy'])->name('job.destroy');
Route::post('/job-status', [JobController::class, 'status'])->name('job.status');
//Role
Route::get('/role-index', [RoleController::class, 'index'])->name('role.index');
Route::get('/role-create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role-store', [RoleController::class, 'store'])->name('role.store');
Route::delete('/role-destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

// SSLCOMMERZ Start
Route::get('/checkout', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('checkout');
// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

require __DIR__ . '/auth.php';
