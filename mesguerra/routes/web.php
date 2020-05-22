<?php

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

// Ruta Página Principal
Route::get('/', function () {
    return view('welcome');
});

Route::get('landing/crear', 'LandingController@crear')->name('landing/crear');
Route::get('landing/index', 'LandingController@crear')->name('landing/index');
Route::put('landing/store', 'LandingController@store')->name('landing/store');

Route::get('landing/success', 'LandingController@success')->name('landing/success');


Auth::routes();
// Ruta Dashboard
Route::get('admin/dashboard', 'Dashboard@index')->name('admin/dashboard');
 
// Rutas CRUD
/* Crear */
Route::get('admin/registro/crear', 'RegistroController@crear')->name('admin/registro/crear');
Route::put('admin/registro/store', 'RegistroController@store')->name('admin/registro/store');
 
/* Leer */
Route::get('admin/registro', 'RegistroController@index')->name('admin/registro');
 
/* Actualizar */
Route::get('admin/registro/actualizar/{id}', 'RegistroController@actualizar')->name('admin/registro/actualizar');
Route::put('admin/registro/update/{id}', 'RegistroController@update')->name('admin/registro/update');
 
/* Eliminar */
Route::put('admin/registro/eliminar/{id}', 'RegistroController@eliminar')->name('admin/registro/eliminar');

/* Contactado */
Route::get('admin/registro/contactado/{id}', 'RegistroController@contactado')->name('admin/registro/contactado');


Route::get('/home', 'HomeController@index')->name('home');
