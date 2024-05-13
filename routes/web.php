<?php

use App\Http\Controllers\AnakJalananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\GantiPasswordController;
use App\Http\Controllers\JaminanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RaziaController;
use App\Http\Controllers\TunaKaryaController;

Route::get('/', function () {
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);


Route::get('lupa-password', [LupaPasswordController::class, 'index']);
Route::get('/reload-captcha', [LoginController::class, 'reloadCaptcha']);
Route::get('/logout', [LogoutController::class, 'logout']);


Route::get('/', [LoginController::class, 'index']);
Route::get('fitur', [FrontController::class, 'fitur']);
Route::get('tim', [FrontController::class, 'tim']);
Route::get('partner', [FrontController::class, 'partner']);
Route::get('hubungikami', [FrontController::class, 'hubungikami']);
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('superadmin', [HomeController::class, 'superadmin']);
    Route::get('superadmin/gp', [GantiPasswordController::class, 'index']);
    Route::post('superadmin/gp', [GantiPasswordController::class, 'update']);
    Route::post('superadmin/sk/updatelurah', [HomeController::class, 'updatelurah']);

    Route::get('superadmin/user', [UserController::class, 'index']);
    Route::get('superadmin/user/create', [UserController::class, 'create']);
    Route::post('superadmin/user/create', [UserController::class, 'store']);
    Route::get('superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('superadmin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('superadmin/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('superadmin/tunakarya', [TunaKaryaController::class, 'index']);
    Route::get('superadmin/tunakarya/create', [TunaKaryaController::class, 'create']);
    Route::post('superadmin/tunakarya/create', [TunaKaryaController::class, 'store']);
    Route::get('superadmin/tunakarya/edit/{id}', [TunaKaryaController::class, 'edit']);
    Route::post('superadmin/tunakarya/edit/{id}', [TunaKaryaController::class, 'update']);
    Route::get('superadmin/tunakarya/delete/{id}', [TunaKaryaController::class, 'delete']);

    Route::get('superadmin/anakjalanan', [AnakJalananController::class, 'index']);
    Route::get('superadmin/anakjalanan/create', [AnakJalananController::class, 'create']);
    Route::post('superadmin/anakjalanan/create', [AnakJalananController::class, 'store']);
    Route::get('superadmin/anakjalanan/edit/{id}', [AnakJalananController::class, 'edit']);
    Route::post('superadmin/anakjalanan/edit/{id}', [AnakJalananController::class, 'update']);
    Route::get('superadmin/anakjalanan/delete/{id}', [AnakJalananController::class, 'delete']);

    Route::get('superadmin/petugas', [PetugasController::class, 'index']);
    Route::get('superadmin/petugas/create', [PetugasController::class, 'create']);
    Route::post('superadmin/petugas/create', [PetugasController::class, 'store']);
    Route::get('superadmin/petugas/edit/{id}', [PetugasController::class, 'edit']);
    Route::post('superadmin/petugas/edit/{id}', [PetugasController::class, 'update']);
    Route::get('superadmin/petugas/delete/{id}', [PetugasController::class, 'delete']);

    Route::get('superadmin/razia', [RaziaController::class, 'index']);
    Route::get('superadmin/razia/create', [RaziaController::class, 'create']);
    Route::post('superadmin/razia/create', [RaziaController::class, 'store']);
    Route::get('superadmin/razia/edit/{id}', [RaziaController::class, 'edit']);
    Route::post('superadmin/razia/edit/{id}', [RaziaController::class, 'update']);
    Route::get('superadmin/razia/delete/{id}', [RaziaController::class, 'delete']);

    Route::get('superadmin/jaminan', [JaminanController::class, 'index']);
    Route::get('superadmin/jaminan/create', [JaminanController::class, 'create']);
    Route::post('superadmin/jaminan/create', [JaminanController::class, 'store']);
    Route::get('superadmin/jaminan/edit/{id}', [JaminanController::class, 'edit']);
    Route::post('superadmin/jaminan/edit/{id}', [JaminanController::class, 'update']);
    Route::get('superadmin/jaminan/delete/{id}', [JaminanController::class, 'delete']);

    Route::get('superadmin/laporan', [LaporanController::class, 'index']);
    Route::get('superadmin/laporan/jenis', [LaporanController::class, 'jenis']);
});
