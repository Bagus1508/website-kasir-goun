<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
use Illuminate\Routing\RouteGroup;
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

//Dashboard Route
Route::get('/', [DashboardController::class, 'index'])->name('index-dashboard');

//Barang
Route::get('/dashboard/barang', [ItemsController::class, 'index'])->name('index-items');

//Transaksi
Route::get('/dashboard/transaksi', [TransactionController::class, 'index'])->name('index-transaction');

//Keranjang
Route::get('/dashboard/keranjang', [BasketController::class, 'index'])->name('index-basket');

//Login Route
Route::get('/login', [LoginController::class, 'login'])->name('login');
