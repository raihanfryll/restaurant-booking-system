<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportContoller;
use App\Http\Controllers\RestableController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/', [BookingController::class, 'store'])->name('booking.store');

Route::get('/check', [PageController::class, 'check'])->name('check');
Route::get('/booking-details/{id}', [PageController::class, 'seedetail'])->name('seedetail');
Route::post('/search', [PageController::class, 'search'])->name('search');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/profil', [AccountController::class, "profil"])->name('profil');
    Route::get('/change-password', [AccountController::class, "changepassword"])->name('changepassword');
    Route::post('/profil/{id}', [AccountController::class, "profil_update"])->name('profil_update');

    Route::get('/bwdatesreport', [ReportContoller::class, "index"])->name('bwdatesreport');
    Route::get('/detailBooking/{id}/{title}', [ReportContoller::class, "detailbooking"])->name('detailbooking');
    Route::post('/bwdatesreport', [ReportContoller::class, "bwdates"])->name('bwdates');

    Route::get('/newbooking', [BookingController::class, "newBooking"])->name('newBooking');
    Route::get('/allbooking', [BookingController::class, "allBooking"])->name('allBooking');
    Route::get('/accbooking', [BookingController::class, "accBooking"])->name('accBooking');
    Route::get('/rejectbooking', [BookingController::class, "rejectBooking"])->name('rjcBooking');


    Route::get('/addtable', [RestableController::class, "index"])->name('addtable');
    Route::get('/managetable', [RestableController::class, "create"])->name('managetable');

    Route::post('/addtable', [RestableController::class, "store"])->name('table.store');
    Route::delete('/managetable/{id}', [RestableController::class, "destroy"])->name('table.destroy');
    // Route::get('/newBooking/{id}', [ReportContoller::class, "detailbooking"])->name('detailnewBooking');

    Route::get('/subadmin', [AccountController::class, 'subadmin'])->name('subadmin');
    Route::get('/subadmin/edit/{id}', [AccountController::class, 'edit'])->name('subadmin.edit');
    Route::put('/subadmin/edit/{id}', [AccountController::class, 'update'])->name('subadmin.update');
    Route::get('/subadmin/resetpassword/{id}', [AccountController::class, 'password'])->name('subadmin.reset');
    Route::put('/subadmin/resetpassword/{id}', [AccountController::class, 'resetPassword'])->name('subadmin.password');
    Route::get('/subadmin/manage', [AccountController::class, 'managesubadmin'])->name('managesubadmin');
    Route::post('/subadmin', [AccountController::class, 'addadmin'])->name('addadmin');
    Route::delete('/subadmin/{id}', [AccountController::class, 'destroy'])->name('subadmin.destroy');

    Route::put('/booking/{id}', [BookingController::class, 'update'])->name('booking.update');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
