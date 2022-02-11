<?php

use App\Http\Controllers\admin\bloodgroupController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\donorController as AdminDonorController;
use App\Http\Controllers\admin\pageController;
use App\Http\Controllers\admin\querylistController;
use App\Http\Controllers\user\contactController;
use App\Http\Controllers\user\donorController;
use App\Http\Controllers\user\pageController as UserPageController;
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

    Route::get('/adminhome', [dashboardController::class, 'dashboard'])->name('adminhome');

    Route::resource('bloodgroup', bloodgroupController::class);
    Route::get('/addbloodgroup', function () {
        return view('admin.addbloodgroup');
    })->name('addbloodgroup');

    Route::get('/managebloodgroup', function () {
        return view('admin.managebloodgroup');
    })->name('managebloodgroup');

    Route::resource('adddonor', AdminDonorController::class);

    Route::get('/donorlist', function () {
        return view('admin.donorlist');
    })->name('donorlist');

    Route::get('/contactlist', [querylistController::class, 'queryList'])->name('contactlist');

    Route::resource('managepage', pageController::class);
});

//ADMIN ROUTE END





//USER ROUTE START
Route::middleware(['auth', 'role:user', 'preventbackhistory'])->group(function () {

    Route::resource('becomedonor', donorController::class);

    Route::get('/about', [UserPageController::class, 'index'])->name('about');

    Route::get('/whydonor', [UserPageController::class, 'whydonor'])->name('whydonorpage');

    Route::resource('becomedonor', donorController::class);

    Route::get('/searchdonor', function () {
        return view('user.searchdonor');
    })->name('searchdonor');

    Route::resource('contact', contactController::class);
});
//USER ROUTE END
