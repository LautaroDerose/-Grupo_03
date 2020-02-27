<?php
session_start();
//VALIDACION DE CAMPOS
require_once "controller/validar.php";
require_once "controller/manejoJson.php";
require_once "controller/usuario.php";
require_once "controller/conexion.php";
require_once "controller/consultas.php";

$error = "";
if (!empty($_SESSION)) {
  header('Location: bienvenida.php');
}

if ($_POST){
  $error = validarDatos($_POST);            //funcion que valida los datos ingresados.
  if (count($error) == 0){

    insertarUsuario($db, $_POST);

    if (isset($_POST["recordarme"])) {
      setcookie("recordarme", "true");
      setcookie("email", $_POST["email"]);
      setcookie("nombre", $_POST["nombre"]);
      setcookie("apellido", $_POST["apellido"]);
    }

    /*
    $allUsers = abrirJson();              //obtengo array con todos los usuarios.
    $id = count($allUsers["usuarios"]) + 1;
    $usuario= armarUsuario($_POST, $id);    // arma un array con datos del usuario
    if(!empty($_FILES)){                    // si hay archivos en files
      $usuario=  verificarArchivo($_FILES, $usuario, $id);    //verifico los datos
    }
  
    $allUsers["usuarios"][]= $usuario;    // agrego el usuario al array de usuarios
    cerrarJson($allUsers);      
    */                                    //transformo el array a json y lo subo
    header('Location: ingresar.php');
  }
}

?>

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
        <form class="form-signin" action="registro.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputName" class="sr-only">Nombre</label>
            <?php if (isset ($_COOKIE["recordarme"]) and isset ($_COOKIE["nombre"])):  ?>
            <input type="text" id="inputName" name="nombre" class="form-control" placeholder="nombre" value="<?= $_COOKIE["nombre"]?>" autofocus>
            <?php else: ?>

             <input type="text" id="inputName" class="form-control mb-4" name="nombre" placeholder="Nombre"  value="<?= persistirDato($error, 'nombre') ?>">
             <small  class="text-danger"> <?= isset($error['nombre']) ? $error['nombre'] : "" ?></small>
           </div>


         <?php endif ?>
         <div class="form-group">
          <label for="inputApellido" class="sr-only">Apellido</label>
          <?php if (isset ($_COOKIE["recordarme"]) and isset ($_COOKIE["apellido"])):  ?>
          <input type="text" id="inputApellido" name="apellido" class="form-control" placeholder="Apellido" value="<?= $_COOKIE["apellido"]?>" autofocus>
          <?php else: ?>
            <input type="text" id="inputApellido" class="form-control mb-4" name="apellido" placeholder="Apellido" value="<?= persistirDato($error, 'apellido') ?>" >
            <small  class="text-danger"> <?= isset($error['apellido']) ? $error['apellido'] : "" ?></small>
          </div>
        <?php endif ?>

        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email</label>
          <?php if (isset ($_COOKIE["recordarme"])):  ?>
            <input type="text" id="inputEmail" name="email" class="form-control mb-4" placeholder="Email" value="<?= $_COOKIE["email"]?>" autofocus>
            <?php else: ?>
             <input type="email" id="inputEmail" class="form-control mb-4" name="email" placeholder="Email" value="<?= persistirDato($error, 'email') ?>" autofocus>
             <small  class="text-danger"> <?= isset($error['email']) ? $error['email'] : "" ?></small>
           </div>
         <?php endif ?>

         <div class="form-group">
          <label for="inputPassword" class="sr-only">Contraseña</label>
          <input type="password" id="inputPassword" class="form-control mb-4" name="pass" placeholder="Contraseña" >
          <small  class="text-danger"> <?= isset($error['pass']) ? $error['pass'] : "" ?></small>
        </div>

        <div class="form-group">
          <label for="inputRePassword" class="sr-only">Validar Contraseña</label>
          <input type="password" id="inputRePassword" class="form-control mb-4" name="rePass" placeholder="Vuelva a escribir la contraseña">
          <small  class="text-danger"> <?= isset($error['rePass']) ? $error['rePass'] : "" ?></small>
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
</div>

<p>Si ya tenes cuenta <a href="ingresar.php">Ingresar</a></p>

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<?php include_once("partials/footer.php")?>
</body>
</html>