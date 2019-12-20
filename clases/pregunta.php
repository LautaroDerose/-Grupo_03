<?php 

/**
 * 
 */
class Pregunta
{
	private $pregunta;
	private $respuesta;
	
	public function __construct($pregunta)
	{
		$this->pregunta = $pregunta;
	}

	public function setPregunta($pregunta){
		$this->pregunta = $pregunta;
	}
	public function setRespuesta($respuesta){
		$this->respuesta = $respuesta;
	}

	public function getPregunta (){
		return $this->pregunta;
	}
	public function getRespuesta (){
		return $this->respuesta;
	}


}




?>