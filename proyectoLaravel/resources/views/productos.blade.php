@extends("layout")

@section("links")
<link rel="stylesheet" href="css/image.css">
@endsection

  @section("titulo")
    Listado
  @endsection  
        
        @section("titulo principal")
          Nuestros Productos
        @endsection 

        
      @section("contenido")
      <form class="form-signin" action="{{url('productos/ordenar')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="float-left mr-4">
          <h4>Ordenar por</h4>
          <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect01" name="order">
              <option selected value="none">Seleccione..</option>
              <option value="alto">Precio mas alto</option>
              <option value="bajo">Precio mas bajo</option>
              <option value="alfabetico">Orden alfabetico</option>
            </select>
          </div>
          <button class="btn btn-primary" type="submit">Seleccionar</button>
        </div>
      </form>
      
      <div class="row">
        @forelse ($productos as $producto ) 
        <div class="col-md-4 mb-4">
          <div class="card" style="width: 18rem;">
            <img src="/storage/fotoProducto/{{ $producto["foto"] }}" class="" alt="image-product">


            <div class="card-body">
              <div class="card-header">{{$producto["nombre"]}}</div>
              <h5 class="card-title">Precio: ${{$producto["precio"]}}</h5>
              <p class="card-text">{{$producto["descripcion"]}}</p>



              <a href="/producto/actualizar/{{ $producto['idProducto']}}" class="btn btn-primary">Modificar</a>


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


