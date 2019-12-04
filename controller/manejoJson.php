<?php


	function abrirJson(){
		$json = file_get_contents("usuarios/usuarios.json"); // obtengo los usuarios de usuarios.json
		$array = json_decode($json,true);  
		return $array;
	}

	function cerrarJson($array){
		$json = json_encode($array);                            // paso el array a json
		file_put_contents("usuarios/usuarios.json", $json);
	}


?>