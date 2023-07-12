<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PasienController;
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
    return view('admin.login');
});
Route::get('register', [AdminController::class, 'register']);
Route::post('register', [AdminController::class, 'postRegister']);
Route::get('login', [AdminController::class, 'login']);
Route::post('login', [AdminController::class, 'postLogin']);
Route::get('logout', [AdminController::class, 'logout']);

Route::middleware('checkAdmin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);

        Route::prefix('obat')->group(function () {
            Route::get('/', [ObatController::class, 'index']);
            Route::get('create', [ObatController::class, 'create']);
            Route::post('create', [ObatController::class, 'store']);
            Route::get('edit/{id}', [ObatController::class, 'edit']);
            Route::post('edit/{id}', [ObatController::class, 'update']);
            Route::get('delete/{id}', [ObatController::class, 'delete']);
        });
        Route::prefix('pegawai')->group(function () {
            Route::get('/', [PegawaiController::class, 'index']);
            Route::get('create', [PegawaiController::class, 'create']);
            Route::post('create', [PegawaiController::class, 'store']);
            Route::get('edit/{id}', [PegawaiController::class, 'edit']);
            Route::post('edit/{id}', [PegawaiController::class, 'update']);
            Route::get('delete/{id}', [PegawaiController::class, 'delete']);
        });
        Route::prefix('tindakan')->group(function () {
            Route::get('/', [TindakanController::class, 'index']);
            Route::get('create', [TindakanController::class, 'create']);
            Route::post('create', [TindakanController::class, 'store']);
            Route::get('edit/{id}', [TindakanController::class, 'edit']);
            Route::post('edit/{id}', [TindakanController::class, 'update']);
            Route::get('delete/{id}', [TindakanController::class, 'delete']);
        });
        Route::prefix('transaksi')->group(function () {
            Route::get('/', [TransaksiController::class, 'index']);
            Route::get('create', [TransaksiController::class, 'create']);
            Route::post('create', [TransaksiController::class, 'store']);
            Route::get('edit/{id}', [TransaksiController::class, 'edit']);
            Route::post('edit/{id}', [TransaksiController::class, 'update']);
            Route::get('delete/{id}', [TransaksiController::class, 'delete']);
        });
        
        Route::prefix('pasien')->group(function () {
            Route::get('/', [PasienController::class, 'index']);
            Route::get('create', [PasienController::class, 'create']);
            Route::post('create', [PasienController::class, 'store']);
            Route::get('edit/{id}', [PasienController::class, 'edit']);
            Route::post('edit/{id}', [PasienController::class, 'update']);
            Route::get('delete/{id}', [PasienController::class, 'delete']);
        });
    });
});