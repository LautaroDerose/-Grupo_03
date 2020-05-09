@extends("layout")

@section("links")
<link rel="stylesheet" href="{{asset('css/image.css')}}">
@endsection

  @section("titulo")
    Listado
  @endsection  
        
        @section("titulo principal")
          Categorias
        @endsection 

        
      @section("contenido")

      <div class="row">
         <div class="card col-xs col-sm-11 col-md-10 col-lg-3 p-0 mr-1 mb-1" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Categorias</h5>
            <a href="/categoria/agregar" class="btn btn-primary">Agregar Categoria</a>
          </div>
        </div>
        @forelse ($categorias as $categoria ) 
          <div class="card col-xs col-sm-11 col-md-10 col-lg-3 p-0 mr-1 mb-1 " style="width: 17rem;">
            <div class="card-body">
              <div class="card-header">
                <p>{{$categoria["nombre"]}}</p>
              <form class="form-signin" action="/categoria/eliminar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="hidden" id="inputName" class="form-control mb-4" name="id"  value="{{ $categoria["idProducto"]}}">
                  <button class="btn btn-danger mt-4" type="submit">Eliminar</button>
                </div>
              </form>
            </div>
          </div>

</div>
        @empty
        <p>No hay categorias</p>
        @endforelse

      
      
    </div>

      
    @endsection