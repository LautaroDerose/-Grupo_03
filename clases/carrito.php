<?php  


/**
 * 
 */
class Carrito
{
	
	private $productos;
	private $total;
	private $subtotal;

	function __construct(argument)
	{
		# code...
	}

	public function set($total){
		$this->total = $total;
	}
	public function set($subtotal){
		$this->subtotal = $subtotal;
	}

	public function get(){
		return $this->total;
	}
	public function get(){
		return $this->subtotal;
	}

	public function agregarProductoAlCarrito($producto){
		$productos[]=$producto;
	}

}


?>