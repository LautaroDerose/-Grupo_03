<?php

function validarDatos($datos){

	$errores=[];

	if(isset($datos["nombre"])){

		if (empty($datos["nombre"])) {
			$errores["nombre"]= "Completa este campo";
		}elseif(strlen($datos["nombre"]) < 3){
			$errores["nombre"]= "Se requieren 3 caracteres minimo";
		}
	}

	if(isset($datos["apellido"])){

		if (empty($datos["apellido"])) {
			$errores["apellido"]= "Completa este campo";
		}elseif(strlen($datos["nombre"]) < 3){
			$errores["apellido"]= "Se requieren 3 caracteres minimo";
		}
	}

	if (isset($datos["email"])) {	
		if (empty($datos["email"])) {
			$errores["email"]= "Completa este campo";
		}elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
			$errores["email"] = "Formato de email erroneo";
		}	
	}

	if (isset($datos["passw"])) {	
		if (empty($datos["pass"])) {
			$errores["password"]= "Completa este campo";
		}
		if(strlen($datos["nombre"]) < 6){
			$errores["password"] = "Contraseña de 6 caracteres minimo";
		}
	}	
	if(isset($datos['rePass'])) {
        if(empty($datos['rePass'])) {
            $errores['rePass'] = "Completa este campo";
        }
        if($datos['rePass'] != $datos['pass'] ) {
            $errores['rePass'] = "Las contraseñas deben coincidir";
        }
    }
    return $errores;
}



function verificarArchivo($archivo, $usuario, $id){
	if ($archivo["archivo"]["error"] == UPLOAD_ERR_OK) {
	    $nombre=$archivo["archivo"]["name"];                         //extraigo el Nombre del archivo
	    $EXT = pathinfo($nombre, PATHINFO_EXTENSION);      //me quedo la extension
	    $archivo=$archivo["archivo"]["tmp_name"];                    // extraigo el contenido
	    move_uploaded_file($archivo, "images-perfil/perfil-$id.".$EXT); // subo el archivo a la carpeta images
	    $usuario["archivo"] = "perfil-$id.".$EXT;
 	}
  	return $usuario;
}


function persistirDato($arrayE, $string) {
    if(isset($arrayE[$string])) {
        return "";
    } else {
        if(isset($_POST[$string])) {
            return $_POST[$string];
        }
    }
}


function validarDatosProducto($datos){

	$errores=[];

	if(isset($datos["nombre"])){

		if (empty($datos["nombre"])) {
			$errores["nombre"]= "Completa este campo";
		}elseif(strlen($datos["nombre"]) < 3){
			$errores["nombre"]= "Se requieren 3 caracteres minimo";
		}
	}

	if(isset($datos["descripcion"])){

		if (empty($datos["descripcion"])) {
			$errores["descripcion"]= "Completa este campo";
		}elseif(strlen($datos["nombre"]) < 3){
			$errores["descripcion"]= "Se requieren 3 caracteres minimo";
		}
	}
	if (isset($datos["precio"])){
		if (empty($datos["precio"])) {
			$errores["precio"]= "Completa este campo";
		}	
	}
    return $errores;
}


?>