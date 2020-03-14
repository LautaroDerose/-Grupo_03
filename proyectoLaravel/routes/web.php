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

#------------------------USUARIOS------------------------

Route::post('/registro/usuario', 'UsuarioController@guardar');
Route::get('usuario/perfil', function(){
	return view('usuarioPerfil');
})->middleware('auth');
Route::get('usuario/perfil/editar', function(){
	return view('usuarioEditar');
})->middleware('auth');

Route::post('usuario/perfil/editar', 'UsuarioController@actualizar')->middleware('auth');


#-----------------PRODUCTOS----------------------------------
#Agrupo rutas para que solo puedan ser utilizadas por el administrador

Route::group(['middleware' => 'admin'], function () {
    Route::Get('producto/agregar', "ProductoController@agregar");
	Route::post('/producto/agregar','ProductoController@guardar');
	Route::post('/producto/eliminar','ProductoController@eliminar');
	Route::post('/producto/actualizar' , 'ProductoController@actualizar');
	Route::get('/producto/actualizar/{id}', 'ProductoController@actualizarForm');
});

Route::get('/productos', 'ProductoController@listar')->middleware('auth');
Route::post('/productos/ordenar', 'ProductoController@ordenarProductos')->middleware('auth');

#--------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




