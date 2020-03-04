<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class productosController extends Controller
{
    public function listar(){
    	$productos = Producto::all(); //SELECT * FROM productos

    	//$productos = Producto::paginate(2); para enviar los datos paginados, en vez de all() o tambien de get(), usar en el vista {{$productos->links}} asi muestras todas las paginas.

    	//$producto= Producto::find($id); -- SELECT * FROM productos WHERE idProducto= id

    	//$producto = Producto::where("precion", ">", 100) 
    	//->orderBy("precio") 
    	//->get() ; se ejectuta la query que construi, solo para el where.

    	//$pelicula = Pelicula::where("rating", ">", 5)->where ("rating", "<=", "8")->orderBy("title", "ASC")->get(); para doble condicion en el where, se llama la funcion where dos veces.

    	return view('productos', compact('productos'));
    }
}
