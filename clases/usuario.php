<?php  


class Usuario{

	protected $nombre;
	protected $apellido;
	protected $email;
	protected $foto;
	protected $contraseña;

	public function __construct($nombre,$apellido,$email,$contraseña,$foto=null){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->email = $email;
		$this->foto = $foto;
		$this->contraseña = $contraseña;
	}

	public function setNombre ($nombre){
		$this->nombre = $nombre;

	}
	public function setApellido ($apellido){
		$this->apellido = $apellido;

	}
	public function setEmail ($email){
		$this->email = $email;

	}
	public function setFoto ($foto){
		$this->foto = $foto;

	}

	public function setContraseña($contraseña){
		$this->contraseña = $contraseña;
	}

	public function getNombre (){
		return $this->nombre;

	}
	public function getApellido (){
		return $this->apellido;

	}
	public function getEmail (){
		return $this->email;

	}
	public function getFoto (){
		return $this->foto;

	}
	public function getContraseña(){
		return $this->contraseña;
	}


}

?>