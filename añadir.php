<?php
session_start();
include_once "controller/consultas.php";
include_once "controller/conexion.php";
include_once "controller/validar.php";

$error = "";
if(empty($_SESSION)){
  header('Location: bienvenida.php');
}

if ($_POST) {
  $error = validarDatosProducto($_POST);

  if (count($error)==0){

	 insertarProducto($db,$_POST);
	 header('Location: listadoProductos.php');
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	 <?php include_once("partials/config.php") ?>
</head>
<body>
	<div class="container">
		<?php if($_SESSION["email"] == "admin@admin.com"):?>
	    <?php include_once("partials/headerAdmin.php")?>
	  	<?php else: ?>
	    	<?php include_once("partials/header.php")?>
	  	<?php endif?> 
		<h1>Agrego un producto nuevo</h1>
		<div class ="row justify-content-md-center mt-4">
      		<div class="col-lg-4 col-md-6 col-xs-12 ">
        		<h2 class="form-signin-heading">Nuevo Producto</h2>
        		<form class="form-signin" action="añadir.php" method="POST" enctype="multipart/form-data">
		 			<div class="form-group">
           				<label for="inputNombre" class="sr-only">Nombre</label>

                <input type="text" id="inputNombre" class="form-control mb-4" name="nombre" placeholder="Nombre"  value="<?= persistirDato($error, 'nombre') ?>">
                <small  class="text-danger"> <?= isset($error['nombre']) ? $error['nombre'] : "" ?></small>

           			</div>

           			<div class="form-group">
           				<label for="inputPrecio" class="sr-only">Precio</label>
            			<input type="text" id="inputPrecio" class="form-control mb-4" name="precio" placeholder="Precio"  value="<?= persistirDato($error, 'precio') ?>">
                <small  class="text-danger"> <?= isset($error['precio']) ? $error['precio'] : "" ?></small>
           			</div>


           		
                <div class="form-group"> 
                  <label for="inputDescripcion" class="sr-only">Descripcion</label>
                  <textarea id="inputDescripcion" name="descripcion" value="<?= persistirDato($error, 'descripcion') ?>" class="md-textarea form-control" placeholder="Descripcion" rows="3" ></textarea>
                  <small  class="text-danger"> <?= isset($error['descripcion']) ? $error['descripcion'] : "" ?></small>
               
                </div>
           			<button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Agregar Producto</button>





           		</form>

           	</div>
        </div>   			
	</div>
	
</body>
</html>