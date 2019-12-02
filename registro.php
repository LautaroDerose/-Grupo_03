<?php

//VALIDACION DE CAMPOS

$bool = false;
$errores = [];
$nombre = "";
$email="";
$apellido="";
$password="";

if (!empty($_POST)){
  //$nombre=$_POST["nombre"];
  //$mail=$_POST["email"];
  //esto se hace en caso de querer mostrar los datos del formulario independientemente de que si fallo o no.
  if((strlen($_POST["nombre"]) == 0 ) or (strlen($_POST["apellido"]) == 0) or  (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) or (strlen($_POST["pass"]) == 0)){

    //valido nombre, que no sea vacio y que no sean numeros
    if((strlen($_POST["nombre"]) == 0)){
      $errores["Nombre"]= $_POST["nombre"];
    }else{
      $nombre=$_POST["nombre"];
      
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $errores["E-mail"] = $_POST["email"];
    }else{
      $email=$_POST["email"];
      
    }

    if((strlen($_POST["apellido"]) == 0)){
      $errores["apellido"] = $_POST["apellido"];
    }else{
      $apellido = $_POST["apellido"];
    }

    if(strlen($_POST["pass"]) == 0){
      $errores["password"] = $_POST["password"];
    }else{
      $password = $_POST["pass"];
    }

  }else{
    $bool = true;
  }

  if ($bool == true){
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $json = file_get_contents("usuarios/usuarios.json"); // obtengo los usuarios de usuarios.json

    $array = json_decode($json,true);  
    $id = count($array["usuarios"]) + 1;
//pregunto si el archivo tiene error
if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
    $nombre=$_FILES["archivo"]["name"];                         //extraigo el Nombre del archivo
    $EXT = pathinfo($nombre, PATHINFO_EXTENSION);      //me quedo la extension
    $archivo=$_FILES["archivo"]["tmp_name"];                    // extraigo el contenido
    move_uploaded_file($archivo, "images-perfil/perfil-$id.".$EXT); // subo el archivo a la carpeta images
} 


//armo el usuario con los datos
$usuario = [
    "id" => $id,
    "nombre" => $_POST["nombre"],
    "apellido" => $_POST["apellido"],
    "email" => $_POST["email"],
    "password" => $pass ,
    "archivo" => "perfil-$id.".$EXT                           // guardo el nombre del archivo para referenciar despues
];


$array["usuarios"][]= $usuario;                         //agrego el usuario en el array
$json = json_encode($array);                            // paso el array a json

file_put_contents("usuarios/usuarios.json", $json);

  }else{
    foreach($errores as $error => $value){
      echo "Dato invalido: ". $error;
      echo "<br>";
    }
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
            <label for="inputName" class="sr-only">Nombre</label>
            <input type="text" id="inputName" class="form-control mb-4" name="nombre" placeholder="Nombre"  value="<?= $nombre ?>" required>
            <label for="inputApellido" class="sr-only">Apellido</label>
            <input type="text" id="inputApellido" class="form-control mb-4" name="apellido" placeholder="Apellido" value="<?= $apellido ?>"  required>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control mb-4" name="email" placeholder="Email" value="<?= $email ?>"  required autofocus>
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control mb-4" name="pass" placeholder="Contraseña" required>
            <div class='container mb-4'>
                <label for="archivo">Foto de perfil</label>
                <input type="file" name="archivo">
            </div>
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
