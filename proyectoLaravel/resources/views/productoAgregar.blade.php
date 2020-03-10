@extends('layout')



@section("titulo")
Registrar Producto

@endsection


@section("titulo principal")
Agrergar Porducto

@endsection


@section("contenido")

		<div class ="row justify-content-md-center mt-4">
      		<div class="col-lg-4 col-md-6 col-xs-12 ">
        		<h2 class="form-signin-heading">Nuevo Producto</h2>
        		<form class="form-signin" action="{{url('producto/agregar')}}" method="POST" enctype="multipart/form-data">
        			@csrf
		 			<div class="form-group">
           				<label for="inputNombre" class="sr-only">Nombre</label>

                <input type="text" id="inputNombre" class="form-control mb-4" name="nombre" placeholder="Nombre"  value="{{ old("nombre") }}">
                @if ($errors->has("nombre"))
                <small  class="text-danger">{{ $errors->first("nombre") }} </small>
				@endif	
           			</div>

           			<div class="form-group">
           				<label for="inputPrecio" class="sr-only">Precio</label>
            			<input type="text" id="inputPrecio" class="form-control mb-4" name="precio" placeholder="Precio"  value="{{ old("precio") }}">
            			@if ($errors->has("precio"))
                			<small  class="text-danger"> {{ $errors->first("precio") }}</small>
                		@endif	
           			</div>


           		
                <div class="form-group"> 
                  <label for="inputDescripcion" class="sr-only">Descripcion</label>
                  <textarea id="inputDescripcion" name="descripcion" value="" class="md-textarea form-control" placeholder="Descripcion" rows="3" ></textarea>
                  <small  class="text-danger"> </small>
               
                </div>
           			<button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Agregar Producto</button>

           		</form>

           	</div>
        </div>   		


@endsection
