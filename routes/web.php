<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';



//Untuk Register dan Login
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

//usermanagement
use App\Http\Controllers\UserManagementController;
//Rute ProductManagement



use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);




Route::middleware('guest')->group(function () {
    // Rute Register
    Route::get('/', [RegisterController::class, 'create'])->name('register');
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
    
    // Logout route
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');
});

use App\Http\Controllers\Auth\GoogleController;

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


use App\Http\Controllers\CheckoutController;

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::get('/payment-success/{orderId}', [CheckoutController::class, 'success'])->name('payment.success');
Route::get('/payment-pending', function () {
    return view('payment-pending');
});
Route::get('/payment-failed', function () {
    return view('payment-failed');
});

Route::post('/payment/notification', [CheckoutController::class, 'handlePaymentNotification']);
Route::get('/payment/notification', [CheckoutController::class, 'handlePaymentNotification']);

use App\Http\Controllers\OrdersayaController;

Route::resource('orders', OrdersayaController::class);


//use App\Http\Controllers\TransactionController;

// Route untuk halaman transaksi pengguna
//Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');



// routes/web.php
use App\Http\Controllers\PasswordResetController;

Route::get('password/reset', [PasswordResetController::class, 'showResetForm'])->name('password.request');
Route::post('password/reset', [PasswordResetController::class, 'reset'])->name('password.update');




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

//rute CRUD contact users
use App\Http\Controllers\CRUDContactController;

Route::resource('contacts', CRUDContactController::class);

//detail-product
use App\Http\Controllers\ProductDetailsController;

Route::get('/beli/{id_produk}', [ProductDetailsController::class, 'show'])->name('product.details');

//rute CRUDkomen
use App\Http\Controllers\CRUDKomentar;

Route::resource('komentars', CRUDKomentar::class);


//rute komentar
use App\Http\Controllers\KomentarController;

Route::post('/komentar/store', [KomentarController::class, 'store'])->middleware('auth')->name('komentar.store');


use App\Http\Controllers\ContactController;

// Rute untuk menampilkan form kontak
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');

// Rute untuk mengirim pesan
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');


//Rute keranjang
use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/update-cart/{id}', [CartController::class, 'updateCart'])->name('cart.update');


//Rute Home
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('Home.index');


//Rute ShopGaming Notebook
use App\Http\Controllers\ShopController;

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

//Rute ShopGaming Notebook
use App\Http\Controllers\ShopControllerNotebook;

Route::get('/shopNotebook', [ShopControllerNotebook::class, 'index'])->name('shopNotebook.index');

//Rute ShopGaming Notebook
use App\Http\Controllers\ShopControllerGamingMonitor;

Route::get('/shopMonitorGaming', [ShopControllerGamingMonitor::class, 'index'])->name('shopSamsungMonitor.index');

//Rute ShopGaming Notebook
use App\Http\Controllers\ShopControllerSmartMonitor;

Route::get('/shopMonitorSmart', [ShopControllerSmartMonitor::class, 'index'])->name('shopSamsungMonitor.index');

//Rute ShopVGA
use App\Http\Controllers\ShopVgaController;

Route::get('/shopVGA', [ShopVgaController::class, 'index'])->name('shopSamsungMonitor.index');

//Rute ShopCPU
use App\Http\Controllers\ShopCPUController;

Route::get('/shopCPU', [ShopCPUController::class, 'index'])->name('shopSamsungMonitor.index');

//Rute ShopCasing
use App\Http\Controllers\ShopCasingController;

Route::get('/shopCasing', [ShopCasingController::class, 'index'])->name('shopSamsungMonitor.index');

//Rute ShopRAM
use App\Http\Controllers\ShopRAMController;

Route::get('/shopRAM', [ShopRAMController::class, 'index'])->name('shopSamsungMonitor.index');

//Rute ShopPSU
use App\Http\Controllers\ShopPSUController;

Route::get('/shopPSU', [ShopPSUController::class, 'index'])->name('shopSamsungMonitor.index');

//Rute ShopRAM
use App\Http\Controllers\ShopCollerController;

Route::get('/shopCooler', [ShopCollerController::class, 'index'])->name('shopSamsungMonitor.index');


//rute pesanan
use App\Http\Controllers\PesananController;

Route::get('/pesanan', [PesananController::class, 'index'])->middleware('auth');

use App\Http\Controllers\PesananManagementController;

Route::resource('PesananManagement', PesananManagementController::class);







//Rute dashboard admin
use App\Http\Controllers\AdminDashboardController;

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');



Route::get('/about', function () {
    return view('users.about');
});


