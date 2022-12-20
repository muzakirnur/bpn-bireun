<?php

use App\Http\Controllers\Admin\DasarPendaftaranController;
use App\Http\Controllers\Admin\PemegangHakController;
use App\Http\Controllers\Admin\SertifikatController;
use App\Http\Controllers\Admin\SuratUkurController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembukuanController;
use App\Http\Controllers\PenerbitanSertifikatController;
use App\Http\Controllers\VillageController;
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
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    /* Route untuk Sertifikat Tanah */
    Route::get('sertifikat', [SertifikatController::class, 'index'])->name('sertifikat.index');
    Route::get('sertifikat/create', [SertifikatController::class, 'create'])->name('sertifikat.create');
    Route::post('sertifikat/create', [SertifikatController::class, 'save'])->name('sertifikat.save');
    Route::get('sertifikat/show/{id}', [SertifikatController::class, 'show'])->name('sertifikat.show');
    Route::get('sertifikat/edit/{id}', [SertifikatController::class, 'edit'])->name('sertifikat.edit');
    Route::put('sertifikat/edit/{id}/update', [SertifikatController::class, 'update'])->name('sertifikat.update');

    /* Route Untuk Data Pemegang Hak */
    Route::get('pemegang-hak', [PemegangHakController::class, 'index'])->name('pemegang-hak.index');

    /* Route untuk dasar Pendaftaran */
    Route::get('dasar-pendaftaran', [DasarPendaftaranController::class, 'index'])->name('dasar-pendaftaran.index');

    /* Route untuk Surat Ukur */
    Route::get('surat-ukur', [SuratUkurController::class, 'index'])->name('surat-ukur.index');

    /* Route Untuk Pembukuan Sertifikat */
    Route::get('pembukuan', [PembukuanController::class, 'index'])->name('pembukuan.index');

    /* Route Untuk Penerbitan Sertifikat */
    Route::get('penerbitan-sertifikat', [PenerbitanSertifikatController::class, 'index'])->name('penerbitan.index');

    /* Route untuk Mendapatkan Data Desa Berdasarkan Kecamatan */
    Route::get('village', [VillageController::class, 'getVillage'])->name('village');
});
