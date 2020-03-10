<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Usuario;

class UsuarioController extends Controller
{
    public function guardar(Request $request){
    	$errores = [
    		"nombre" => 'required|string|max:45|min:3',
    		"apellido" => 'required|string|max:45|min:3',
    		"email" => 'required|max:45|email:rfc,dns|unique',
    		"password" => 'required|max:150|min:8'
    	];

    	$mensajes = [
    		'required' => "El  :attribute es necesario",
    		'max' => "El  :attribute tiene un maximo de :max caracteres ",
    		'min' => "El  :attribute debe ser como minimo de :min caracteres",
    		'unique' => "El :attribute ya existe, por favor escribe otro",
    		'string' => "El :attribute debe ser solo letras"
    	];

    	$this->validate($request,$errores,$mensajes);


    	$nombre = $request["nombre"];
    	$apellido = $request["apellido"];
    	$email = $request["email"];
    	return "Usuario con nombre: " .$nombre ." apellido: " .$apellido. " y con email " .$email;
    }

   
}
