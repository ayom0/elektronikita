<?php

use Illuminate\Support\Facades\Route;

//Untuk Register dan Login
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

//usermanagement
use App\Http\Controllers\UserManagementController;
//Rute ProductManagement
use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return view('welcome');
});





Route::middleware('guest')->group(function () {
    // Rute Register
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

     // Rute login
     Route::get('/login', [LoginController::class, 'create'])->name('login');
     Route::post('/login', [LoginController::class, 'store']);

});




//Rute Usermanagement
Route::get('/usermanagement', [UserManagementController::class, 'index'])->name('usermanagement.index');
Route::resource('users', UserManagementController::class);

//Rute ProductManagement
Route::get('/productmanagement', [ProductController::class, 'index'])->name('productmanagement.index');
Route::resource('product', ProductController::class);




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




