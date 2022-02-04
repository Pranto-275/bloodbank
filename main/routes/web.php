<?php

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
});


Auth::routes(['register' => false]);


//ADMIN ROUTE START

Route::middleware(['auth', 'role:admin', 'preventbackhistory'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

//ADMIN ROUTE END

//USER ROUTE START
Route::middleware(['auth', 'role:user', 'preventbackhistory'])->group(function () {
    Route::get('/test', function () {
        return view('test');
    })->name('test');

    Route::get('/homepage', function () {
        return view('user.home');
    })->name('usersite');

    Route::get('/about', function () {
        return view('user.about');
    })->name('about');

    Route::get('/whydonor', function () {
        return view('user.whydonor');
    })->name('whydonor');

    Route::get('/becomedonor', function () {
        return view('user.becomedonor');
    })->name('becomedonor');

    Route::get('/searchdonor', function () {
        return view('user.searchdonor');
    })->name('searchdonor');

    Route::get('/contactus', function () {
        return view('user.contactus');
    })->name('contactus');
});
//USER ROUTE END
