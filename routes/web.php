<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PengeluaranController;


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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/tahunajaran', function () {
    return view('tahunajaran');
});
// routes/web.php
Route::get('/pembayaran-siswa', [App\Http\Controllers\PembayaranSiswaController::class, 'index'])->name('pembayaran-siswa.index');
// routes/web.php
Route::get('/pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'index'])->name('pengeluaran.index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/', function () {
//     return view('welcome');
// });