@extends("layout")

@section("links")
<link rel="stylesheet" href="css/registro.css">
@endsection

@section("titulo")
	Ingresar
@endsection

@section("titulo principal")
	Ingresar
@endsection

@section("contenido")
	<section class="ml-4 mt-4">
      <div class ="row justify-content-md-center mt-4">
        <div class="col-lg-4 col-md-6 col-xs-12 ">
          <img class="img-responsive" src="perfil-user.svg" height="300px" width="220px" alt="perfil">
          <h2 class="form-signin-heading">Complete con sus datos</h2>
          <form class="form-signin" action="" method="post">
            <div class="form-group">
             <label for="inputEmail" class="sr-only">Email</label>
            

                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" value="" autofocus>
                <small  class="text-danger"> </small>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="sr-only">Contraseña</label>
              <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Contraseña" >
              <small  class="text-danger"> </small>
            </div>
           

            <div class="checkbox form-group">
              <br>
              <label>
                <input type="checkbox" name="recordarme" value=""> Recordarme
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Entrar</button>
            <p>¿ No tenes cuenta ? <a href="{{ url('registro') }}">Registrate!</a></p>
          </form>
        </div>
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      </div>
    </section> 

@endsection