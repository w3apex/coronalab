<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DivisionsController;
use App\Http\Controllers\Backend\DistrictsController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\AdminsController;
use App\Http\Controllers\Backend\PatientsController;
use App\Http\Controllers\Backend\ReportsController;
use App\Http\Controllers\Backend\TransactionsController;
use App\Http\Controllers\Backend\LabTechnitianController;
use App\Http\Controllers\Backend\DoctorsController;
use App\Http\Controllers\Backend\SlidersController;
use App\Http\Controllers\Backend\ServicesController;

use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\ForgotPasswordController;
use App\Http\Controllers\Backend\Auth\ConfirmPasswordController;
use App\Http\Controllers\Backend\Auth\ResetPasswordController;

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\VerificationController;
use App\Http\Controllers\Frontend\UsersController;
use App\Http\Controllers\Frontend\BookingsController;



Auth::routes();

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about.us');
Route::get('/services', [PagesController::class, 'service'])->name('services');
Route::get('/doctors', [PagesController::class, 'doctor'])->name('doctors');
Route::get('/appoinment', [PagesController::class, 'appoinment'])->name('appoinments');
Route::get('/blogs', [PagesController::class, 'blog'])->name('blogs');
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact.us');

// User Routs
Route::group(['prefix' => 'user'], function() {
	Route::get('/token/{token}', [VerificationController::class, 'verify'])->name('user.verification');
	Route::get('/dashboard', [UsersController::class, 'dashboard'])->name('user.dashboard');
	Route::get('/profile', [UsersController::class, 'profile'])->name('user.profile');
	Route::post('/profile/update', [UsersController::class, 'profileUpdate'])->name('user.profile.update');
});

// Booking Routs
Route::group(['prefix' => '/booking'], function(){
	Route::get('/', [BookingsController::class, 'booking'])->name('booking');
	Route::post('/submit', [BookingsController::class, 'store'])->name('booking.submit');
	Route::get('/edit/{id}', [BookingsController::class, 'edit'])->name('booking.edit');
	Route::get('/list', [BookingsController::class, 'bookingList'])->name('booking.list');
});

// Admin Routs Group
Route::group(['prefix' => 'admin'], function() {
	Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

	Route::group(['prefix' => '/roles'], function(){
		Route::get('/', [RolesController::class, 'index'])->name('roles.index');
		Route::get('/create', [RolesController::class, 'create'])->name('roles.create');
		Route::post('/store', [RolesController::class, 'store'])->name('roles.store');
		Route::get('/edit/{id}', [RolesController::class, 'edit'])->name('roles.edit');
		Route::post('/update/{id}', [RolesController::class, 'update'])->name('roles.update');
		Route::post('/delete/{id}', [RolesController::class, 'destroy'])->name('roles.delete');
	});

	Route::group(['prefix' => '/admins'], function(){
		Route::get('/', [AdminsController::class, 'index'])->name('admins.index');
		Route::get('/create', [AdminsController::class, 'create'])->name('admins.create');
		Route::post('/store', [AdminsController::class, 'store'])->name('admins.store');
		Route::get('/edit/{id}', [AdminsController::class, 'edit'])->name('admins.edit');
		Route::post('/update/{id}', [AdminsController::class, 'update'])->name('admins.update');
		Route::post('/delete/{id}', [AdminsController::class, 'destroy'])->name('admins.delete');
	});

	Route::group(['prefix' => '/patients'], function(){
		Route::get('/', [PatientsController::class, 'index'])->name('patients.index');
		Route::get('/create', [PatientsController::class, 'create'])->name('patients.create');
		Route::post('/store', [PatientsController::class, 'store'])->name('patients.store');
		Route::get('/edit/{id}', [PatientsController::class, 'edit'])->name('patients.edit');
		Route::post('/update/{id}', [PatientsController::class, 'update'])->name('patients.update');
		Route::post('/delete/{id}', [PatientsController::class, 'destroy'])->name('patients.delete');
	});

	Route::group(['prefix' => '/labTechnitian'], function(){
		Route::get('/booked/list', [LabTechnitianController::class, 'bookedList'])->name('booked.list');
		Route::post('/collected/submit/{id}', [LabTechnitianController::class, 'collectedSubmit'])->name('collected.submit');
		Route::get('/collected/list', [LabTechnitianController::class, 'collectedList'])->name('collected.list');
		Route::get('/report/view/{id}', [LabTechnitianController::class, 'view'])->name('view.report');
		Route::post('/diagnosis/submit/{id}', [LabTechnitianController::class, 'diagnosisResult'])->name('diagnosis.result');
		Route::get('/complete/list', [LabTechnitianController::class, 'completeList'])->name('complete.list');
		Route::get('/report/view/doctor/{id}', [LabTechnitianController::class, 'viewByDoctor'])->name('view.report.doctor');
		Route::post('/complete/submit/{id}', [LabTechnitianController::class, 'completeSubmit'])->name('complete.submit');
	});

	Route::group(['prefix' => '/doctors'], function(){
		Route::get('/request/list', [DoctorsController::class, 'requestList'])->name('request.list');
		Route::post('/confirm/submit/{id}', [DoctorsController::class, 'confirmResult'])->name('confirm.submit');
	});

	Route::group(['prefix' => '/divisions'], function(){
		Route::get('/', [DivisionsController::class, 'index'])->name('divisions.index');
		Route::get('/create', [DivisionsController::class, 'create'])->name('divisions.create');
		Route::post('/store', [DivisionsController::class, 'store'])->name('divisions.store');
		Route::get('/edit/{id}', [DivisionsController::class, 'edit'])->name('divisions.edit');
		Route::post('/update/{id}', [DivisionsController::class, 'update'])->name('divisions.update');
		Route::post('/delete/{id}', [DivisionsController::class, 'destroy'])->name('divisions.delete');
	});

	Route::group(['prefix' => '/districts'], function(){
		Route::get('/', [DistrictsController::class, 'index'])->name('districts.index');
		Route::get('/create', [DistrictsController::class, 'create'])->name('districts.create');
		Route::post('/store', [DistrictsController::class, 'store'])->name('districts.store');
		Route::get('/edit/{id}', [DistrictsController::class, 'edit'])->name('districts.edit');
		Route::post('/update/{id}', [DistrictsController::class, 'update'])->name('districts.update');
		Route::post('/delete/{id}', [DistrictsController::class, 'destroy'])->name('districts.delete');
	});

	Route::group(['prefix' => '/sliders'], function(){
		Route::get('/', [SlidersController::class, 'index'])->name('sliders.index');
		Route::get('/create', [SlidersController::class, 'create'])->name('sliders.create');
		Route::post('/store', [SlidersController::class, 'store'])->name('sliders.store');
		Route::get('/edit/{id}', [SlidersController::class, 'edit'])->name('sliders.edit');
		Route::post('/update/{id}', [SlidersController::class, 'update'])->name('sliders.update');
		Route::post('/delete/{id}', [SlidersController::class, 'destroy'])->name('sliders.delete');
	});

	Route::group(['prefix' => '/services'], function(){
		Route::get('/', [ServicesController::class, 'index'])->name('services.index');
		Route::get('/create', [ServicesController::class, 'create'])->name('services.create');
		Route::post('/store', [ServicesController::class, 'store'])->name('services.store');
		Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
		Route::post('/update/{id}', [ServicesController::class, 'update'])->name('services.update');
		Route::post('/delete/{id}', [ServicesController::class, 'destroy'])->name('services.delete');
	});

	Route::group(['prefix' => '/reports'], function(){
		Route::get('/', [ReportsController::class, 'index'])->name('reports.index');
		Route::get('/create', [ReportsController::class, 'create'])->name('reports.create');
		Route::post('/store', [ReportsController::class, 'store'])->name('reports.store');
		Route::get('/edit/{id}', [ReportsController::class, 'edit'])->name('reports.edit');
		Route::post('/update/{id}', [ReportsController::class, 'update'])->name('reports.update');
		Route::post('/delete/{id}', [ReportsController::class, 'destroy'])->name('reports.delete');
	});

	Route::group(['prefix' => '/transactions'], function(){
		Route::get('/', [TransactionsController::class, 'index'])->name('transactions.index');
		Route::get('/create', [TransactionsController::class, 'create'])->name('transactions.create');
		Route::post('/store', [TransactionsController::class, 'store'])->name('transactions.store');
		Route::get('/edit/{id}', [TransactionsController::class, 'edit'])->name('transactions.edit');
		Route::post('/update/{id}', [TransactionsController::class, 'update'])->name('transactions.update');
		Route::post('/delete/{id}', [TransactionsController::class, 'destroy'])->name('transactions.delete');
	});

	//login routes
	Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
	Route::post('/login/submit', [LoginController::class, 'login'])->name('admin.login.submit');

	//logiout routes
	Route::post('/logout/submit', [LoginController::class, 'logout'])->name('admin.logout.submit');
	
	//forget password routs
	Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.reset');
	Route::post('/password/reset/submit', [ForgotPasswordController::class, 'reset'])->name('admin.password.update');

});	
