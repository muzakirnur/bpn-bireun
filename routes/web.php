<?php

use App\Http\Controllers\Admin\DasarPendaftaranController;
use App\Http\Controllers\Admin\PemegangHakController;
use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\Admin\SuratUkurController;
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
        Route::get('sertifikat/create', [SertifikatController::class, 'create'])->name('sertifikat.create');

        /* Route Untuk Data Pemegang Hak */
        Route::get('pemegang-hak', [PemegangHakController::class, 'index'])->name('pemegang-hak.index');

        /* Route untuk dasar Pendaftaran */
        Route::get('dasar-pendaftaran', [DasarPendaftaranController::class, 'index'])->name('dasar-pendaftaran.index');

        /* Route untuk Surat Ukur */
        Route::get('surat-ukur', [SuratUkurController::class, 'index'])->name('surat-ukur.index');
    });
});
