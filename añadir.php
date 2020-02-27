<?php
session_start();
include_once "controller/consultas.php";
include_once "controller/conexion.php";

if(empty($_SESSION)){
  header('Location: bienvenida.php');
}

if ($_POST) {
	insertarProducto($db,$_POST);
	header('Location: listadoProductos.php');
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
            			<input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="nombre" value="" autofocus>
           			</div>
           			<div class="form-group">
           				<label for="inputPrecio" class="sr-only">Precio</label>
            			<input type="text" id="inputPrecio" name="precio" class="form-control" placeholder="precio" value="" autofocus>
           			</div>
           			<div class="form-group">
           				<label for="inputDescripcion" class="sr-only">Descripcion</label>
            			<input type="text" id="inputDescripcion" name="descripcion" class="form-control" placeholder="descripcion" value="" autofocus>
           			</div>
           			<button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Agregar Producto</button>
           		</form>

           	</div>
        </div>   			
	</div>
	
</body>
</html>