<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses', [AuthController::class, 'proses'])->name('proses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth','Akses:admin']], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::resource('kamar',KamarController::class);
    Route::resource('fasilitas-hotel',FasilitasController::class);
    Route::get('/pemesanan', [PemesananController::class, 'index']); 

});

Route::group(['middleware' => ['auth','Akses:user']], function(){
    Route::get('/user', [UserController::class, 'index'])->name('user');
});

// Route::group(['middleware' => ('auth')], function(){
//     Route::group(['middleware' => ('Akses:admin')], function(){
//         Route::get('/admin', [AdminController::class, 'index'])->name('admin');
//     });
//     Route::group(['middleware' => ('Akses:user')], function(){
//         Route::get('/user', [UserController::class, 'index'])->name('user');
//     });
// });

