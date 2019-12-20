<?php  

/**
 * 
 */
class Producto{
	
	private $nombre;
	private $precio;
	private $valoracion;
	private $descripcion;
	private $foto;



	public function __construct($nombre, $precio, $descripcion, $foto, $valoracion = null){
		$this->nombre = $nombre;
		$this->precion = $precio;
		$this->valoracion = $valoracion;
		$this->descripcion = $descripcion;
		$this->foto = $foto;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function setPrecion($precio){
		$this->precion = $precio;
	}
	public function set($valoracion){
		$this->valoracion = $valoracion;
	}
	public function set($descripcion){
		$this->descripcion = $descripcion;
	}
	public function setFoto($foto){
		$this->foto = $foto;
	}

	public function getNombre(){
		return $this->nombre;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getValoracion(){
		return $this->valoracion;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
	public function get($foto){
		return $this->foto;
	}

	public function valorar($valoracion){
		$this->valoracion = $this->valoracion + $valoracion;

	}


}



?>