<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include_once("partials/config.php") ?>
  <link rel="stylesheet" href="css/registro.css">
  <title>Registro</title>
</head>
<body>
  <div class="container">
  <?php include_once("partials/header.php") ?>
    <div class ="row justify-content-md-center mt-4">
      <div class="col-lg-4 col-md-6 col-xs-12 ">
          <h2 class="form-signin-heading">Registro</h2>
          <form class="form-signin">
            <label for="inputPassword" class="sr-only">Nombre</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="Nombre" required>
            <label for="inputPassword" class="sr-only">Apellido</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="Apellido" required>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Registrarse</button>
          </form>
      </div>
    </div>      
  </div>

  <p>Si ya tenes cuenta <a href="ingresar.html">Ingresar</a></p>

  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php include_once("partials/footer.php")?>
</body>
</html>
