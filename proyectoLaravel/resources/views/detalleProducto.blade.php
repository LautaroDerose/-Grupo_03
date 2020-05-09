@extends("layout")

@section("titulo")
	Home
@endsection


@section("contenido")

<div class="row">
	@if(isset($producto))
	<div class="card col-xs col-sm col-md-8 col-lg-5 p-0 mr-1 mb-1 " style="width: 17rem;">
            @if($producto["foto"] != null)

            <img src="{{asset('/storage/fotoProducto/$producto->foto')}}" class="card-img-top" alt="image-product">
            @else
              <img src="{{asset('unnamed.png')}}" class="card-img-top" alt="image-product">
            @endif
            <div class="card-body">
              <div class="card-header">{{$producto["nombre"]}}</div>
              <h5 class="card-title">Precio: ${{$producto["precio"]}}</h5>
              @if($producto->stock > 0)
              <p class="card-text bg-success ">En Stock</p>
              @else
              <p class="card-text bg-danger ">Sin Stock</p>
              @endif
              <p class="card-text">{{$producto->descripcion}}</p>

            </div>
         </div>
    @else
		<p>No se encontro el producto</p>
	@endif  
</div>
	    






@endsection