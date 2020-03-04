@extends("layout")

  @section("titulo")
    Listado
  @endsection  

        @section("titulo principal")
          Nuestros Productos
        @endsection 
      @section("contenido")
      <div class="row">
        @forelse ($productos as $producto ) 
        <div class="col-md-4">

          <div class="card border-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$producto["nombre"]}}</div>
            <div class="card-body text-primary">
              <h5 class="card-title"> Precio: ${{$producto["precio"]}}</h5>
              <p class="card-text">{{$producto["descripcion"]}}</p>
            </div>
          </div>
        </div>
        @empty
        <p>No hay productos</p>
        @endforelse

      </div>
    @endsection


