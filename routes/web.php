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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categorias', 'CategoriaController');
$router->get('categorias/{id}/destroy', [
    'as' => 'categorias.destroy', 'uses'=>'CategoriaController@destroy',
]);

Route::resource('productos_proveedores', 'Producto_ProveedorController');
$router->get('productos_proveedores/{id}/destroy', [
    'as' => 'productos_proveedores.destroy', 'uses'=>'Producto_ProveedorController@destroy',
]);

Route::resource('compras', 'CompraController');
$router->get('compras/{id}/destroy', [
    'as' => 'compras.destroy', 'uses'=>'CompraController@destroy',
]);

Route::resource('usuarios', 'UsuariosController');
$router->get('usuarios/{id}/destroy', [
    'as' => 'usuarios.destroy', 'uses'=>'UsuariosController@destroy',
]);
