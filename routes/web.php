<?php

use Illuminate\Support\Facades\Route;

//Untuk Register dan Login
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

//usermanagement
use App\Http\Controllers\UserManagementController;
//Rute ProductManagement





Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);




Route::middleware('guest')->group(function () {
    // Rute Register
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    
    

     // Rute login
     Route::get('/login', [LoginController::class, 'create'])->name('login');
     Route::post('/login', [LoginController::class, 'store']);

});

Route::middleware('auth')->group(function () {
    // Rute Profile
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});




//Rute Usermanagement
Route::get('/usermanagement', [UserManagementController::class, 'index'])->name('usermanagement.index');
Route::resource('users', UserManagementController::class);

//Rute ProductManagement
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

//rute details pesanan
use App\Http\Controllers\OrderController;

Route::get('/order-details', [OrderController::class, 'showOrderDetails'])->name('order.details');
Route::post('/order-details', [OrderController::class, 'submitOrder'])->name('order.submit');


//Rute keranjang
use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/update-cart/{id}', [CartController::class, 'updateCart'])->name('cart.update');


//Rute ShopGaming Notebook
use App\Http\Controllers\ShopController;

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

//Rute ShopGaming Notebook
use App\Http\Controllers\ShopControllerNotebook;

Route::get('/shopNotebook', [ShopControllerNotebook::class, 'index'])->name('shopNotebook.index');

//Rute ShopGaming Notebook
use App\Http\Controllers\ShopControllerGamingMonitor;

Route::get('/shopSamsungMonitor', [ShopControllerGamingMonitor::class, 'index'])->name('shopSamsungMonitor.index');


Route::get('/landingpage', function () {
    return view('landing');
});

Route::get('/profil', function () {
    return view('users.profile');
});

Route::get('/pesanan', function () {
    return view('users.pesanan');
});

Route::get('/home', function () {
    return view('users.Home');
});

Route::get('/about', function () {
    return view('users.about');
});



Route::get('/beli', function () {
    return view('users.beli');
});

Route::get('/contact', function () {
    return view('users.contact');
});


Route::get('/adminDashboard', function () {
    return view('admin.userManagement');
});




