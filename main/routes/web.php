<?php

use App\Http\Controllers\admin\bloodgroupController;
use App\Http\Controllers\admin\donorController as AdminDonorController;
use App\Http\Controllers\admin\querylistController;
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


    Route::get('/adminhome', function () {
        return view('admin.dashboard');
    })->name('adminhome');


    Route::resource('bloodgroup', bloodgroupController::class);
    Route::get('/addbloodgroup', function () {
        return view('admin.addbloodgroup');
    })->name('addbloodgroup');



    Route::get('/managebloodgroup', function () {
        return view('admin.managebloodgroup');
    })->name('managebloodgroup');


    // Route::get('/addbloodgroup', function () {
    //     return view('admin.addbloodgroup');
    // })->name('addbloodgroup');



    Route::resource('adddonor', AdminDonorController::class);


    Route::get('/donorlist', function () {
        return view('admin.donorlist');
    })->name('donorlist');

    Route::get('/contactlist', [querylistController::class, 'queryList'])->name('contactlist');


    Route::get('/managepage', function () {
        return view('admin.managepage');
    })->name('managepage');

    Route::get('/updatecontact', function () {
        return view('admin.updatecontact');
    })->name('updatecontact');
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
