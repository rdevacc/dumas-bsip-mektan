<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DumasFormController;
use App\Http\Controllers\DumasLoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dumas', [DumasFormController::class, 'index'])->name('form');
Route::post('/dumas', [DumasFormController::class, 'store'])->name('form-submit');

Route::prefix('admin')->group(function () {
    Route::get('/login', [DumasLoginController::class, 'login'])->name('login');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('pengaduan')->group(function () {
        Route::get('/', [PengaduanController::class, 'index'])->name('pengaduan');
        Route::get('{id}', [PengaduanController::class, 'show'])->name('showPengaduan');
        Route::get('edit/{dataEdit}', [PengaduanController::class, 'edit'])->name('editPengaduan');
        Route::put('{dataEdit}', [PengaduanController::class, 'update'])->name('submit-editPengaduan');
        Route::delete('{dataDelete}', [PengaduanController::class, 'destroy'])->name('destroy-pengaduan');
    });

    Route::prefix('pj')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('user-index');
        Route::get('/create', [UserController::class, 'create'])->name('user-create');
        Route::post('/create', [UserController::class, 'store'])->name('user-create-submit');
    });
});