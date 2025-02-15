<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Pelanggan //
Route::get('/', [Controller::class, 'index'])->name('Home');
Route::get('/shop', [Controller::class, 'shop'])->name('shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/loginpelanggan', [Controller::class, 'login'])->name('login');
Route::get('/registerpelanggan', [Controller::class, 'register'])->name('register');
Route::get('/checkout', [Controller::class, 'checkout'])->name('checkout');

// login % regis
// Route::get('/login', [Controller::class, 'login'])->name('login');
// Route::get('/registration', [Controller::class, 'regis'])->name('registration');





// admin
Route::get('/admindashboard', [Controller::class, 'admindashboard'])->name('admin');

// kelola product
Route::get('/adminproducts', [ProductsController::class, 'adminproducts'])->name('adminproduct');
Route::get('/add', [ProductsController::class, 'showAdd'])->name('add');
Route::post('/adminproducts', [ProductsController::class, 'createProducts'])->name('create');
Route::get('/detail/{id}', [ProductsController::class, 'showDetail'])->name('detail');
Route::get('/edit/{id}', [ProductsController::class, 'showEdit'])->name('edit');
Route::post('/updateproducts{id}', [ProductsController::class, 'update'])->name('update');
Route::get('/deleteproducts/{id}', [ProductsController::class, 'delete'])->name('delete');

// kelola transaki
Route::get('/admintransaksi', [TransaksiController::class, 'admintransaksi'])->name('admintransaksi');
Route::get('/addtransakasi', [TransaksiController::class, 'showTransaksi'])->name('addtransaksi');
Route::post('/admintransaksi', [TransaksiController::class, 'createTransaksi'])->name('create');
Route::get('/detailtransaksi/{id}', [TransaksiController::class, 'showDetail'])->name('detailtransaksi');
Route::get('/edittransaksi/{id}', [TransaksiController::class, 'show'])->name('edittransaksi');
Route::post('/updatetransaksi{id}', [TransaksiController::class, 'updateTransaksi'])->name('updatetransaksi');
Route::get('/deletetransaksi/{id}', [TransaksiController::class, 'destroy'])->name('deletetransaksi');



