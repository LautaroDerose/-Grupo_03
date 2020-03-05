<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function validar(Request $request){
    	$nombre = $request->input("nombre");
    	$apellido = $request->input("apellido");
    	$email = $request->input("email");
    	$pass = $request->input("pass");
    	$repass = $request->input("rePass");
    	return "Usuario con nombre: " .$nombre ." apellido: " .$apellido. " y con email " .$email;
    }
}
