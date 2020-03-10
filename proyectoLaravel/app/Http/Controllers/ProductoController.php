<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
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

    public function guardar(Request $request){

    	$errores = [
    		"nombre" => 'required|string|max:60|min:3',
    		"precio" => 'required|numeric',
    		"descripcion" => 'string|max:255|',
    	];

    	$mensajes = [
    		'required' => "El  :attribute es necesario",
    		'max' => "El  :attribute tiene un maximo de :max caracteres ",
    		'min' => "El  :attribute debe ser como minimo de :min caracteres",
    		'numeric' => "El :attribute debe ser numerico",
    		'string' => "El :attribute debe ser solo letras"
    	];

    	$this->validate($request,$errores,$mensajes);
    	 
    	$producto = new Producto();
    	$producto->nombre = $request["nombre"];
    	$producto->precio = $request["precio"];
    	$producto->descripcion = $request["descripcion"];
    	$producto->valoracion = 5;

    	$producto->save();

    	return redirect("/productos");



    }


     public function eliminar(Request $request){
    	$producto = Producto::find($request["id"]);

    	$producto->delete();

    	return redirect("/productos");

    }
}
