<?php  

/**
 * 
 */
class Contacto
{	

	private $nombre;
	private $email;
	private $celular;	
	private $mensaje;	

	public function __construct($nombre, $email,$celular, $mensaje )
	{
		$this->nombre = $nombre;
		$this->email = $email;
		$this->celular = $celular;
		$this->mensaje = $mensaje;
	}


	public function setNombre ($nombre){
		$this->nombre = $nombre;
	}
	public function setEmail ($email){
		$this->email = $email;
	}
	public function setCelular ($celular){
		$this->celular = $celular;
	}
	public function setMensaje ($mensaje){
		$this->mensaje = $mensaje;
	}


	public function getNombre (){
		return $this->nombre;
	}
	public function getEmail (){
		return $this->email;
	}
	public function getCelular (){
		return $this->celular;
	}
	public function getMensaje (){
		return $this->mensaje;
	}

}


?>