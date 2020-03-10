@extends("layout")

@section("links")
<link rel="stylesheet" href="css/registro.css">
@endsection

@section("titulo")
Registro

@endsection


@section("titulo principal")
Registro

@endsection


@section("contenido")
<div class ="row justify-content-md-center mt-4">
      <div class="col-lg-4 col-md-6 col-xs-12 ">
        <form class="form-signin" action="{{url('registro/usuario')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="inputName" class="sr-only">Nombre</label>


             <input type="text" id="inputName" class="form-control mb-4" name="nombre" placeholder="Nombre"  value="{{ old('nombre') }}">
             @if ($errors->has("nombre"))
             <small  class="text-danger">{{ $errors->first("nombre") }}</small>
             @endif
           </div>


         <div class="form-group">
          <label for="inputApellido" class="sr-only">Apellido</label>
            <input type="text" id="inputApellido" class="form-control mb-4" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}" >
            @if($errors->has("apellido"))
            <small  class="text-danger">{{ $errors->first("apellido") }} </small>
            @endif
          </div>

        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email</label>

             <input type="email" id="inputEmail" class="form-control mb-4" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
             @if ($errors->has("email"))
             <small  class="text-danger" >{{ $errors->first("email") }} </small>
             @endif
           </div>

         <div class="form-group">
          <label for="inputPassword" class="sr-only">Contraseña</label>
          <input type="password" id="inputPassword" class="form-control mb-4" name="password" placeholder="Contraseña" >
          @if ($errors->has("password"))
          <small  class="text-danger">{{ $errors->first("password") }}</small>
          @endif
        </div>

        <div class="form-group">
          <label for="inputRePassword" class="sr-only">Validar Contraseña</label>
          <input type="password" id="inputRePassword" class="form-control mb-4" name="rePass" placeholder="Vuelva a escribir la contraseña">
          <small  class="text-danger"> </small>
        </div>

        <div class='container mb-4'>
          <label for="archivo">Foto de perfil</label>
          <input type="file" name="archivo">
        </div>
        <div class="checkbox">
          <br>
          <label>
            <input type="checkbox" name="recordarme" value=""> Recordarme
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Registrarse</button>
      </form>
    </div>
  </div>

@endsection