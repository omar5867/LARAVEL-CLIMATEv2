<?php

use App\Http\Controllers\ControlPuntos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Datos;


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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/creditos', function () {
    return view('creditos');
});

Route::get('/acerca_de', function () {
    return view('acerca_de');
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
        $data1 = Datos::where('punto', 1)->get();
        
        $data2 = Datos::where('punto', 2)->get();

        return view('dashboard', compact('data1','data2'));

    })->name('dashboard');
 
    Route::controller(ControlPuntos::class)->prefix('puntos')->group(function () {
        Route::get('', 'index')->name('puntos');
        Route::get('create', 'create')->name('puntos.create');
        Route::post('store', 'store')->name('puntos.store');
        Route::get('createdata/{idpunto}', 'createdata')->name('puntos.createdata');
        Route::post('storedata/{idpunto}', 'storedata')->name('puntos.storedata');
        Route::get('show/{id}', 'show')->name('puntos.show');
        Route::get('edit/{id}', 'edit')->name('puntos.edit');
        Route::put('edit/{id}', 'update')->name('puntos.update');
        Route::get('editdata/{id}', 'editdata')->name('puntos.editdata');
        Route::put('editdata/{id}', 'updatedata')->name('puntos.updatedata');
        Route::delete('destroy/{id}', 'destroy')->name('puntos.destroy');
        Route::delete('destroydata/{id}', 'destroydata')->name('puntos.destroydata');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

   
});

