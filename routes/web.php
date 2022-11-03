<?php

use App\Http\Controllers\SecurityController;
use App\Http\Controllers\SuccessController;
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

Route::post('/', [SecurityController::class, 'login'])->name('login');

Route::group(['middleware' => ['authenticated']], function() {
    Route::get('/', [SecurityController::class, 'index'])->name('login-page');
    Route::get('/logout', [SecurityController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [SuccessController::class, 'dashboard'])->name('dashboard');
});
