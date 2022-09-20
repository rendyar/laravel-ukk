<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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




Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses', [AuthController::class, 'proses'])->name('proses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth','Akses:admin']], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
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

