<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|----------------------------   ---------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');

Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');

Route::post('/usuarios/store','UsuariosController@store')->name('usuario.store');




Route::get('/categorias','CategoriasController@index')->name('categorias');

Route::get('/categorias/create','CategoriasController@create')->name('categorias.create');

Route::post('/categorias/store','CategoriasController@store')->name('categoria.store');

Route::get('/categorias/edit/{cat_id}','CategoriasController@edit')->name('categorias.edit');

Route::post('/categoria/update/{cat_id}','CategoriasController@update')->name('categoria.uptade');

Route::post('/categoria/destroy/{cat_id}','CategoriasController@destroy')->name('categoria.destroy');



Route::get('/tipos','TiposController@index')->name('tipos');

Route::get('/tipos/create','TiposController@create')->name('tipos.create');

Route::post('/tipos/store','TiposController@store')->name('tipos.store');

Route::get('/tipos/edit/{tip_id}','TiposController@edit')->name('tipos.edit');

Route::post('/tipo/update/{tip_id}','TiposController@update')->name('tipo.uptade');

Route::post('/tipos/destroy/{tip_id}','TiposController@destroy')->name('tipos.destroy');


Route::get('/movimientos','MovimientosController@index')->name('movimientos');   

Route::get('/movimientos/create','MovimientosController@create')->name('movimientos.create');

Route::post('/movimientos/store','MovimientosController@store')->name('movimientos.store');

Route::get('/movimientos/edit/{mov_id}','MovimientosController@edit')->name('movimientos.edit'); 

Route::post('/movimiento/update/{mov_id}','MovimientosController@update')->name('movimiento.uptade');

Route::post('/movimiento/destroy/{mov_id}','MovimientosController@destroy')->name('movimiento.destroy');  


Route::post('/movimientos/search','MovimientosController@index')->name('movimientos.search');
