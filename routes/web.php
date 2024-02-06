<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Crear */
Route::get('admin/productos/crear', 'App\Http\Controllers\ProductosController@crear')->name('admin/productos/crear');
Route::put('admin/productos/store', 'App\Http\Controllers\ProductosController@store')->name('admin/productos/store');
 
/* Leer */ 
Route::get('admin/productos/show/{id}', 'App\Http\Controllers\ProductosController@show')->name('admin/productos/detalles'); 
 
/* Actualizar */
Route::get('admin/productos/actualizar/{id}', 'App\Http\Controllers\ProductosController@actualizar')->name('admin/productos/actualizar');
Route::put('admin/productos/update/{id}', 'App\Http\Controllers\ProductosController@update')->name('admin/productos/update');
 
/* Eliminar */
Route::put('admin/productos/eliminar/{id}', 'App\Http\Controllers\ProductosController@eliminar')->name('admin/productos/eliminar'); 
 
/* Vista Principal */
Route::get('admin/productos', 'App\Http\Controllers\ProductosController@index')->name('admin/productos');

require __DIR__.'/auth.php';
