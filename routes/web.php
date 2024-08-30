<?php

use Illuminate\Support\Facades\Route;

//Untuk Auth
use App\Http\Controllers\Auth\registerController;

//usermanagement
use App\Http\Controllers\UserManagementController;





Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login');
});


//Route Register
Route::post('/register', [registerController::class, 'register'])->name('register');
Route::get('/register', [registerController::class, 'register'])->name('register');




//Route Usermanagement
Route::get('/usermanagement', [UserManagementController::class, 'index'])->name('usermanagement.index');
Route::resource('users', UserManagementController::class);



Route::get('/landingpage', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('users.Home');
});

Route::get('/about', function () {
    return view('users.about');
});

Route::get('/shop', function () {
    return view('users.shop');
});

Route::get('/beli', function () {
    return view('users.beli');
});

Route::get('/contact', function () {
    return view('users.contact');
});

Route::get('/keranjang', function () {
    return view('users.keranjang');
});

Route::get('/adminDashboard', function () {
    return view('admin.userManagement');
});




