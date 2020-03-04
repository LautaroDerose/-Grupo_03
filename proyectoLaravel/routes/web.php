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

Route::get('/productos', 'productosController@listar');
Route::Get('/registro', function(){
	return view('registro');
});

Route::get('/home', function(){
	return view('home');
});

Route::get('/login', function(){
	return view('login');
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


