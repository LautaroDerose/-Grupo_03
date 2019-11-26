<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include_once("partials/config.php") ?>
    <link rel="stylesheet" href="css/registro.css">
    <title>Ingresar</title>
  </head>
<body>
  <div class="container">
    <?php include_once("partials/header.php") ?>
    <section class="ml-4 mt-4">
    <div class ="row justify-content-md-center mt-4">
      <div class="col-lg-4 col-md-6 col-xs-12 ">
        <br>
        <img class="img-responsive" src="images/perfil-user.svg" height="300px" width="220px" alt="perfil">
        <h2 class="form-signin-heading">Ingresar</h2>
        <form class="form-signin">
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
            <div class="checkbox">
              <br>
              <label>
                <input type="checkbox" value="remember-me"> Recordarme
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Entrar</button>
            <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Registro</button>

        </form>
      </div>
      <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </div>
</section> 
</div>

<?php include_once("partials/footer.php")?>
</body>
</html>
