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
Route::get('/productos', 'ProductoController@listar')->middleware('auth');
Route::Get('/registro', function(){
	return view('registro');
});

Route::get('/inicio', function(){
	return view('inicio');
});

Route::get('/inicio/sesion', function(){
	return view('inicioSesion');
});

Route::get('/carrito', function(){
	return view('carrito');
});

Route::get('/preguntas', function(){
	return view('preguntas');
});

Route::get('/contacto', function(){
	return view('contacto');
});

Route::post('/registro/usuario', 'UsuarioController@guardar');


#Agrupo rutas para que solo puedan ser utilizadas por el administrador

Route::group(['middleware' => 'admin'], function () {
    Route::Get('producto/agregar', "ProductoController@agregar");
	Route::post('/producto/agregar','ProductoController@guardar');
	Route::post('/producto/eliminar','ProductoController@eliminar');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

