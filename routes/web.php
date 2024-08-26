<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/loginregister', function () {
    return view('auth.login');
});


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
    return view('admin.index');
});
