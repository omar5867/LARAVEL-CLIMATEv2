<?php

use App\Http\Controllers\ControlPuntos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/creditos', function () {
    return view('creditos');
});

Route::get('upload/5867',[ControlPuntos::class,'add']);

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login','login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ControlPuntos::class)->prefix('puntos')->group(function () {
        Route::get('', 'index')->name('puntos');
        Route::get('create', 'create')->name('puntos.create');
        Route::post('store', 'store')->name('puntos.store');
        Route::get('show/{id}', 'show')->name('puntos.show');
        Route::get('edit/{id}', 'edit')->name('puntos.edit');
        Route::put('edit/{id}', 'update')->name('puntos.update');
        Route::delete('destroy/{id}', 'destroy')->name('puntos.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});