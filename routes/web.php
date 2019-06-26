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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Categorias
Route::group(['prefix'=>'categorias'], function(){
    Route::get('/','CategoryController@index'); // home original de productos según mockup (categorias)
    Route::get('/cargar','CategoryController@create'); //va a llevar al formulario de carga de categoria (solo administrador)
    Route::post('/cargar','CategoryController@store');//va a guardar el categoria en la base de datos (solo administrador)
});

//SubCategorias
Route::group(['prefix'=>'subcategorias'], function(){
    Route::get('/cargar','SubcategoryController@create'); //va a llevar al formulario de carga de subcategoria (solo administrador)
    Route::post('/cargar','SubcategoryController@store');//va a guardar el subcategoria en la base de datos (solo administrador)
});

//Productos
Route::group(['prefix'=>'productos'], function(){
    Route::get('/cargar','ProductController@create'); //va a llevar al formulario de carga de producto
    Route::post('/cargar','ProductController@store');//va a guardar el producto en la base de datos
    Route::get('/categoria/{id}', 'ProductController@index'); //va a mostrar todos los productos segun el ID de categoria.
    Route::get('/{id}', 'ProductController@show'); //va a mostrar las fotos y detalle de un producto (JAVASCRIPT)
    Route::get('/editar/{id}', 'ProductController@edit'); //va a llevar al formulario de edición
    Route::patch('/editar/{id}', 'ProductController@update'); //va a editar en la base de datos
});