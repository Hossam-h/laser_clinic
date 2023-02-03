<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AboutUsController;
use App\Http\Controllers\Dashboard\ClinicProfileController;
use App\Http\Controllers\Dashboard\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();


Route::get('/', function () {
    return view('end_user.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});


Route::group(['prefix' => 'about_us', 'as' => 'about_us.'], function () {
    Route::get('/', [AboutUsController::class, 'index'])->name('index');
    Route::get('/create', [AboutUsController::class, 'create'])->name('create');
    Route::post('/store', [AboutUsController::class, 'store'])->name('store');
    Route::get('edit/{id}', [AboutUsController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [AboutUsController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [AboutUsController::class, 'destroy'])->name('destroy');
});


Route::group(['prefix' => 'clinic_profile', 'as' => 'clinic_profile.'], function () {
    Route::get('/', [ClinicProfileController::class, 'index'])->name('index');
    Route::get('/create', [ClinicProfileController::class, 'create'])->name('create');
    Route::post('/store', [ClinicProfileController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ClinicProfileController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [ClinicProfileController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [ClinicProfileController::class, 'destroy'])->name('destroy');

});


Route::group(['prefix' => 'testimonial', 'as' => 'testimonial.'], function () {
    Route::get('/', [TestimonialController::class, 'index'])->name('index');
    Route::get('edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [TestimonialController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [TestimonialController::class, 'destroy'])->name('destroy');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
