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


    /* Productos */

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
    
    Route::post('admin/productos', 'App\Http\Controllers\ProductosController@index')->name('admin/productos');
    Route::get('admin/productos', 'App\Http\Controllers\ProductosController@index')->name('admin/productos');
    
    
    /* Incidencias */
    
    /* Crear */
    Route::get('admin/incidencias/crear', 'App\Http\Controllers\IncidenciasController@crear')->name('admin/incidencias/crear'); 
    Route::put('admin/incidencias/store', 'App\Http\Controllers\IncidenciasController@store')->name('admin/incidencias/store'); 
    
    /* Leer */ 
    Route::get('admin/incidencias/show/{id}', 'App\Http\Controllers\IncidenciasController@show')->name('admin/incidencias/detalles'); 
    
    /* Actualizar */
    Route::get('admin/incidencias/actualizar/{id}', 'App\Http\Controllers\IncidenciasController@actualizar')->name('admin/incidencias/actualizar'); 
    Route::put('admin/incidencias/update/{id}', 'App\Http\Controllers\IncidenciasController@update')->name('admin/incidencias/update'); 
    
    /* Eliminar */
    Route::put('admin/incidencias/eliminar/{id}', 'App\Http\Controllers\IncidenciasController@eliminar')->name('admin/incidencias/eliminar'); 
    
    /* Vista Principal */
    Route::get('admin/incidencias', 'App\Http\Controllers\IncidenciasController@index')->name('admin/incidencias'); 
    Route::post('admin/incidencias', 'App\Http\Controllers\IncidenciasController@index')->name('admin/incidencias'); 
    
    /* Empresas */
    
    /* Crear */
    
    Route::get('admin/empresas/crear', 'App\Http\Controllers\EmpresasController@crear')->name('admin/empresas/crear');
    Route::put('admin/empresas/store', 'App\Http\Controllers\EmpresasController@store')->name('admin/empresas/store');
    
    /* Leer */
    
    Route::get('admin/empresas/show/{id}', 'App\Http\Controllers\EmpresasController@show')->name('admin/empresas/detalles');
    
    /* Actualizar */
    
    Route::get('admin/empresas/actualizar/{id}', 'App\Http\Controllers\EmpresasController@actualizar')->name('admin/empresas/actualizar');
    Route::put('admin/empresas/update/{id}', 'App\Http\Controllers\EmpresasController@update')->name('admin/empresas/update');
    
    /* Eliminar */
    
    Route::put('admin/empresas/eliminar/{id}', 'App\Http\Controllers\EmpresasController@eliminar')->name('admin/empresas/eliminar');
    
    /* Vista Principal */
    
    Route::get('admin/empresas', 'App\Http\Controllers\EmpresasController@index')->name('admin/empresas');
    Route::post('admin/empresas', 'App\Http\Controllers\EmpresasController@index')->name('admin/empresas');
    

});


require __DIR__.'/auth.php';
