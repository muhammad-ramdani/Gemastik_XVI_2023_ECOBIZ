<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembersihanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProsespembersihanController;
use App\Http\Controllers\UserController;
use App\Models\Pembersihan;
use App\Models\User;

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

Route::get('welcome', function () { return view('welcome'); });
Route::get('/', function () { return view('index'); });
Route::get('pembersihan', function () { return view('pembersihan'); });
Route::get('penjualan', function () { return view('penjualan'); });
Route::get('pembelian', function () { return view('pembelian'); });
Route::get('notifikasi', function () { return view('notifikasi'); });
Route::get('pembayarandonasi', function () { return view('pembayarandonasi'); });
Route::get('donasi', function () { return view('donasi'); });
Route::get('riwayatpembersihan', function () { return view('riwayatpembersihan'); });
Route::get('prosespembersihan/{pembersihan}', function (Pembersihan $pembersihan) { return view('prosespembersihan', ['pembersihan' => $pembersihan]); });

// 

Route::group(['prefix' => 'admin'], function() {
    Route::get('/',[DashboardController::class, 'index']);
    Route::resources(['pembersihan' => PembersihanController::class]);
    Route::resources(['penjualan' => PenjualanController::class]);
    Route::resources(['produk' => ProdukController::class]);
    Route::resources(['donatur' => DonaturController::class]);
    Route::resources(['user' => UserController::class]);
    Route::resources(['prosespembersihan' => ProsespembersihanController::class]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

