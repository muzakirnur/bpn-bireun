<?php

use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /* Route Group Khusus User */
    Route::middleware('user')->as('user.')->prefix('user')->group(function () {
        Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    });

    /* Route Group Khusus Admin */
    Route::middleware('admin')->prefix('admin')->as('admin.')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');

        /* Route untuk Sertifikat Tanah */
        Route::get('sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
    });
});
