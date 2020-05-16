<?php

namespace App;


class Carrito
{
    public $items= null;
    public $totalQty= 0;
    public $totalPrice = 0;
    

    public function __construct ($oldCart){
    	if($oldCart){
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item, $id){
    	
    	$storedItem = ['qty' => 0, 'price'=> $item->precio, 'nombre' =>$item->nombre,'item'=>$item];
    	if ($this->items){
    		if (array_key_exists($id, $this->items)){
    			$storedItem = $this->items[$id];
    		}
    	}
    	//dd($item->precio);
    	$storedItem['qty']++;
    	$storedItem['price'] = $item->precio * $storedItem['qty'];
    	$this->items[$id] = $storedItem;
    	$this->totalQty++;
    	$this->totalPrice += $item->precio;
    	
    }
}