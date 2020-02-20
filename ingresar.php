<?php

session_start();
require_once "controller/validar.php";
require_once "controller/manejoJson.php";
require_once "controller/usuario.php";
require_once "controller/consultas.php";
require_once "controller/conexion.php";

$error = "";

if (!empty($_SESSION)) {
  header('Location: bienvenida.php');
}

if ($_POST){
  $error = validarDatos($_POST);  //funcion que valida los datos ingresados.

  if (count($error) == 0){

    $usuario = buscarUsuarioEmail($db, $_POST);
    if(!empty($usuario)){
      if ($usuario["email"] == $_POST["email"]){
          if( password_verify($_POST['pass'], $usuario['password']) ){
            $_SESSION["id"] =$usuario["id"];
            $_SESSION["nombre"] =$usuario["nombre"];
            if (isset($_POST["recordarme"])) {
              $_SESSION["password"] =$usuario["password"];
              setcookie("recordarme", "true");
              setcookie("email", $usuario["email"]);
            }
            if ($usuario["email"] = "admin@admin.com") {
              header("Location: configuracion.php");
            }else{
              header("Location: bienvenida.php");
            }
            
          }
          else{
            $error['pass'] = "Contraseña incorrecta";
          }
        } else {
          $error['email'] = "Email incorrecto"; 
        } 
      }
    }



    /*
    $allUsers = abrirJson();     //obtengo array con todos los usuarios. 
    foreach ($allUsers as $value) {
      foreach ($value as $user) {
        if ($user["email"] == $_POST["email"]){
          if( password_verify($_POST['pass'], $user['password']) ){
            $_SESSION["id"] =$user["id"];
            $_SESSION["nombre"] =$user["nombre"];
            if (isset($_POST["recordarme"])) {
              $_SESSION["password"] =$user["password"];
              setcookie("recordarme", "true");
              setcookie("email", $user["email"]);
            }
            header("Location: bienvenida.php");
          }
          else{
            $error['pass'] = "Contraseña incorrecta";
          }
        } else {
          $error['email'] = "Email incorrecto"; 
        } 
      }
    }
    cerrarJson($allUsers);
   */
    
  }



?>



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
          <form class="form-signin" action="" method="post">
            <div class="form-group">
             <label for="inputEmail" class="sr-only">Email</label>
             <?php if (isset ($_COOKIE["recordarme"])):  ?>
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" value="<?= $_COOKIE["email"]?>" autofocus>
              <?php else: ?>

                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" value="<?= persistirDato($error, 'email') ?>" autofocus>
                <small  class="text-danger"> <?= isset($error['email']) ? $error['email'] : "" ?></small>
              <?php endif ?>
            </div>

            <div class="form-group">
              <label for="inputPassword" class="sr-only">Contraseña</label>
              <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Contraseña" >
              <small  class="text-danger"> <?= isset($error['pass']) ? $error['pass'] : "" ?></small>
            </div>
           

            <div class="checkbox form-group">
              <br>
              <label>
                <input type="checkbox" name="recordarme" value=""> Recordarme
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Entrar</button>
            <p>¿ No tenes cuenta ? <a href="registro.php">Registrate!</a></p>
          </form>
        </div>
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
      </div>
    </section> 
  </div>

  <?php include_once("partials/footer.php")?>
</body>
</html>