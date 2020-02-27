<?php

/*CONSULTAS PARA USUARIOS*/

function buscarUsuarioEmail($db, $usuario){
	$user= $usuario["email"];

	$sql = 
	"SELECT * 
	FROM usuarios
	WHERE email = :user";

	$consulta = $db->prepare($sql);
	$consulta->bindValue(':user', $user, PDO::PARAM_STR);
	//ejecuto la consulta
	$consulta->execute();

	//leo los resultados obtenidos
	$resultado = $consulta->fetch(PDO::FETCH_ASSOC);  

	return $resultado;


}
function buscarUsuarioId($db, $id){
	$idUs= $id;

	$sql = 
	"SELECT * 
	FROM usuarios
	WHERE idUsuario = :id";

	$consulta = $db->prepare($sql);
	$consulta->bindValue(':id', $idUs, PDO::PARAM_STR);
	//ejecuto la consulta
	$consulta->execute();

	//leo los resultados obtenidos
	$resultado = $consulta->fetch(PDO::FETCH_ASSOC);  

	return $resultado;


}

function editarUsuario($db, $usuario){
	$nombre = $usuario["nombre"];
	$apellido = $usuario["apellido"];
	$email = $usuario["email"];
	$id= $usuario["idUsuario"];
	$sql=
	"
	UPDATE usuarios
	SET nombre= :nombre, apellido=:apellido, email=:email 
	WHERE idUsuario=:id
	";
	$consulta = $db->prepare($sql);
	$consulta->bindValue(':id', $id, PDO::PARAM_INT);
	$consulta->bindValue(':nombre', $nombre, PDO::PARAM_STR);
	$consulta->bindValue(':apellido', $apellido, PDO::PARAM_INT);
	$consulta->bindValue(':email', $email, PDO::PARAM_STR);
	$consulta->execute();


}


function insertarUsuario($db, $usuario){
	$nombre = $usuario["nombre"];
	$apellido = $usuario["apellido"];
	$email = $usuario["email"];
	$pass = password_hash($usuario["pass"], PASSWORD_DEFAULT);

	$sql= "
	INSERT INTO usuarios 
	VALUES (null, :nombre, :apellido, :email, :password)
	";

	$consulta = $db->prepare($sql);
	$consulta->bindValue(':nombre', $nombre, PDO::PARAM_STR);
	$consulta->bindValue(':apellido', $apellido, PDO::PARAM_STR);
	$consulta->bindValue(':email', $email, PDO::PARAM_STR);
	$consulta->bindValue(':password',$pass, PDO::PARAM_STR);

	$consulta->execute();
}



/*CONSULTAS PARA PRODUCTOS*/

function insertarProducto($db,$producto){
	$nombre = $producto["nombre"];
	$precio = $producto["precio"];
	$descripcion = $producto["descripcion"];
	$sql= "
	INSERT INTO productos 
	VALUES (null, :nombre, :precio, :descripcion, :valoracion)
	";

	$consulta = $db->prepare($sql);
	$consulta->bindValue(':nombre', $nombre, PDO::PARAM_STR);
	$consulta->bindValue(':precio', $precio, PDO::PARAM_INT);
	$consulta->bindValue(':descripcion', $descripcion, PDO::PARAM_STR);
	$consulta->bindValue(':valoracion',5, PDO::PARAM_INT);

	$consulta->execute();
}

function obtenerProductos($db){

	$sql = 
	"SELECT * 
	FROM productos";

	$consulta = $db->prepare($sql);
	//ejecuto la consulta
	$consulta->execute();

	//leo los resultados obtenidos
	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);  

	return $resultado;

}

function eliminarProducto($db, $id){

	$sql="
	DELETE
	FROM productos 
	WHERE idProducto=:id
	";

	$consulta = $db->prepare($sql);

	$consulta->bindValue(':id', $id, PDO::PARAM_INT);
	$consulta->execute();
}

function obtenerProductoId($db, $id){

	$sql = 
	"SELECT * 
	FROM productos
	WHERE idProducto= :id";

	$consulta = $db->prepare($sql);
	$consulta->bindValue(':id', $id, PDO::PARAM_INT);
	//ejecuto la consulta
	$consulta->execute();

	//leo los resultados obtenidos
	$resultado = $consulta->fetch(PDO::FETCH_ASSOC);  

	return $resultado;

}

function editarProducto($db, $producto){
	$nombre = $producto["nombre"];
	$precio = $producto["precio"];
	$descripcion = $producto["descripcion"];
	$id= $producto["idProd"];
	$sql=
	"
	UPDATE productos
	SET nombre= :nombre, precio=:precio, descripcion=:descripcion 
	WHERE idProducto=:id
	";
	$consulta = $db->prepare($sql);
	$consulta->bindValue(':id', $id, PDO::PARAM_INT);
	$consulta->bindValue(':nombre', $nombre, PDO::PARAM_STR);
	$consulta->bindValue(':precio', $precio, PDO::PARAM_INT);
	$consulta->bindValue(':descripcion', $descripcion, PDO::PARAM_STR);
	$consulta->execute();


}

/*CONSULTAS PARA PREGUNTAS*/

function insertarPregunta($db, $pregunta){
	$titulo = $pregunta["titulo"];
	$pregunta = $pregunta["pregunta"];
	
	
	$sql= "
	INSERT INTO preguntas
	VALUES (null, :titulo, :pregunta)
	";

	$consulta = $db->prepare($sql);
	$consulta->bindValue(':pregunta', $pregunta, PDO::PARAM_STR);
	$consulta->bindValue(':titulo', $titulo, PDO::PARAM_STR);

	$consulta->execute();

}

function obtenerPreguntas($db){
	$sql = 
	"SELECT * 
	FROM preguntas";

	$consulta = $db->prepare($sql);
	//ejecuto la consulta
	$consulta->execute();

	//leo los resultados obtenidos
	$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);  

	return $resultado;

}




?>