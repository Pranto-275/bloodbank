<?php

use App\Http\Controllers\user\contactController;
use App\Http\Controllers\user\donorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
})->middleware('preventloginpage');


Auth::routes();


//ADMIN ROUTE START

Route::middleware(['auth', 'role:admin', 'preventbackhistory'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/adminhome', function () {
        return view('admin.layouts.app');
    });
});

//ADMIN ROUTE END

//USER ROUTE START
Route::middleware(['auth', 'role:user', 'preventbackhistory'])->group(function () {


    Route::resource('becomedonor', donorController::class);


    Route::get('/about', function () {
        return view('user.about');
    })->name('about');

    Route::get('/whydonor', function () {
        return view('user.whydonor');
    })->name('whydonor');


    Route::resource('becomedonor', donorController::class);

    Route::get('/searchdonor', function () {
        return view('user.searchdonor');
    })->name('searchdonor');


    Route::resource('contact', contactController::class);
});
//USER ROUTE END
