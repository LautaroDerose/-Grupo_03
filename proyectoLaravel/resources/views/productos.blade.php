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
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="/storage/fotoProducto/{{ $producto["foto"] }}" class="card-img-top" alt="image-product">
            <div class="card-body">
              <div class="card-header">{{$producto["nombre"]}}</div>
              <h5 class="card-title">Precio: ${{$producto["precio"]}}</h5>
              <p class="card-text">{{$producto["descripcion"]}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
              <form class="form-signin" action="/producto/eliminar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="hidden" id="inputName" class="form-control mb-4" name="id"  value="{{ $producto["idProducto"]}}">
                  <button class="btn btn-danger mt-4" type="submit">Eliminar</button>
                </div>
              </form>
            </div>
          </div>

        </div>

        @empty
        <p>No hay productos</p>
        @endforelse

      
      </div>
      
    @endsection


