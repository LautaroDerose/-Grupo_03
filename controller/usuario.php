<?php

	function armarUsuario($datos, $id){
		$pass = password_hash($datos["pass"], PASSWORD_DEFAULT);
		$usuario = [
		    "id" => $id,
		    "nombre" => $datos["nombre"],
		    "apellido" => $datos["apellido"],
		    "email" => $datos["email"],
		    "password" => $pass
		];
		return $usuario;
	}


?>