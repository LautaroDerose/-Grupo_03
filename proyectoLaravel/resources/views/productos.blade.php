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
              <form class="form-signin" action="/producto/eliminar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="hidden" id="inputName" class="form-control mb-4" name="id"  value="{{ $producto["idProducto"]}}">
                  <button class="btn btn-lg btn-danger btn-block black-background white" type="submit">Eliminar</button>
                </div>
              </form>
          </div>

        </div>

        @empty
        <p>No hay productos</p>
        @endforelse

      
      </div>
      
    @endsection


