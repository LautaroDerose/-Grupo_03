<?php

session_start();
if (empty($_SESSION)) {
  header('Location: bienvenida.php');
}

require_once 'controller/manejoJson.php';
require_once "controller/consultas.php";
require_once "controller/conexion.php";


$usuario =  buscarUsuarioId($db, $_SESSION["id"]);




/*
$array = abrirJson();

foreach ($array as $value) {
  foreach ($value as $user) {
    if ($user["id"] == $_SESSION["id"]) {
      $nombre = $user["nombre"];
      $apellido = $user["apellido"];
      $email = $user["email"];
      if (isset($user["archivo"])) {
        $archivo = $user["archivo"];
      }
    }
  }
}
*/

?>

<html>
<head>

  <title>Datos del usuario</title>

  <?php include_once("partials/config.php") ?>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

  <title>Usuario</title>
</head>
<body>
  <div class="container">
  <?php if($_SESSION["email"] == "admin@admin.com"):?>
    <?php include_once("partials/headerAdmin.php")?>
  <?php else: ?>
    <?php include_once("partials/header.php")?>
  <?php endif?> 
  

  <section class="ml-4 mt-4">
    <div class="row ml-4">

      <div class="col-lg-8 col-md-6 col-xs-12 ">

       <a href="#"><img class="img-responsive" src="images-perfil/<?php echo "$archivo" ?>" height="300px" width="220px" alt ="image-perfil"></a>
       <p><a href="">Editar foto de perfil</a></p>
     </div>
     <div class="col-lg-4 col-md-6 col-xs-12 mt-4">
      <table class="table table-hover table-borderless">
        <h3>Datos de usuario</h3>
        <tbody>
          <tr>
            <th scope="row">Nombre:</th>
            <td><?= $usuario["nombre"] ?></td>
          </tr>
          <tr>
            <th scope="row">Apellido:</th>
            <td><?= $usuario["apellido"]?></td>
          </tr>
          <tr>
            <th scope="row">Email:</th>
            <td><?= $usuario["email"]?></td>
          </tr>
        </tbody>
      </table>
      <form class="form-signin" action="editarUsuario.php" method="GET" enctype="multipart/form-data">
        <input type="hidden" id="idUsuario" name="idUsuario" class="form-control" value="<?= $usuario["idUsuario"]?>" autofocus>      
        <button class="btn btn-outline-info" type="submit">Editar</button>
    </form>
    </div>
  </div>
</section>
</div>

<?php include_once("partials/footer.php")?>

</body>
</html>
