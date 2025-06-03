<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

Route::get('/', [LoginController::class, 'login'])->name('login');

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('registeruser', [RegisterController::class, 'register'])->name('register');

Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


// Halaman utama langsung pakai controller index


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
//pdf user
Route::get('printpdf', [UserController::class,'printPDF'])->name('printuser');
Route::get('printexcel', [UserController::class,'userExcel'])->name('exportuser');
//pdf katefori
Route::get('/laporan/kategori', [CategoryController::class, 'printPdf'])->name('laporan.kategori');
//pdf produk
Route::get('/laporan/produk', [ProductController::class, 'printPdf'])->name('laporan.produk');
