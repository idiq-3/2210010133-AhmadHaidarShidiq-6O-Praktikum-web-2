<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\CustomerController;

// Halaman utama langsung pakai controller index
Route::get('/', function () {
    return view('dashboard');
});

// Tambahkan nama route agar bisa dipanggil dengan route('dashboard') di Blade
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// Named route untuk halaman users
Route::get('/users', [UserController::class, 'users'])->name('users');
//produk
Route::resource('products', ProductController::class);
//kategori
Route::resource('categories', CategoryController::class);
//satuan
Route::resource('satuans', SatuanController::class);
//customer
Route::resource('customers', CustomerController::class);
