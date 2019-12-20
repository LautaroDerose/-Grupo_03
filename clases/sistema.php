<?php  

include_once'usuario.php';

/**
 * 
 */
class Sistema{
	private $contactos;
	private $preguntas;
	private $usuarios;
	private $productos;


	public function __construct(argument)
	{
		
	}

	public function agregarUsuario($usuario){
		$this->usuarios[] = $usuario;

	}

	public function agregarProducto($producto){
		$this->productos[] = $producto;

	}

	public function agregarContacto($contacto){
		$this->contactos[]=$contacto;

	}

	public function agregarPreguntaFrecuente($pregunta){
		$this->preguntas[]= $pregunta;
	}

	public function iniciarSesion($email, $contraseña){
		//si la contraseña y el email son validos , inicia la sesion

	}

	public function cerrarSesion(){
		
	}

	public function registrarse($nombre, $apellido, $email, $contraseña,$foto=null){
		//si pasa las validaciones creo un usuario y lo agrego.
		$usuario = new Usuario($nombre,$apellido,$email,$contraseña, $foto);
		$this->agregarUsuario($usuario);
	}


}


?>