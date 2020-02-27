<?php 

session_start();
require_once "controller/consultas.php";
require_once "controller/conexion.php";

if(empty($_SESSION)){
  header('Location: home.php');
}

if (!empty($_GET)) {
  $productos = obtenerProductoId($db, $_GET["idProd"]);
} elseif (!empty($_POST)){
	editarProducto($db, $_POST);
	
	header('Location: listadoProductos.php');
}else{
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
        		<form class="form-signin" action="editarProducto.php" method="POST" enctype="multipart/form-data">
        			<input type="hidden" id="idProd" name="idProd" class="form-control" value="<?= $productos["idProducto"]?>" autofocus>  
		 			<div class="form-group">
           				<label for="inputNombre" class="sr-only">Nombre</label>
            			<input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="nombre" value="<?=  $productos["nombre"] ?>" autofocus>
           			</div>
           			<div class="form-group">
           				<label for="inputPrecio" class="sr-only">Precio</label>
            			<input type="text" id="inputPrecio" name="precio" class="form-control" placeholder="precio" value="<?=  $productos["precio"] ?>" autofocus>
           			</div>
           			<div class="form-group">
           				<label for="inputDescripcion" class="sr-only">Descripcion</label>
            			<input type="text" id="inputDescripcion" name="descripcion" class="form-control" placeholder="descripcion" value="<?=  $productos["descripcion"] ?>" autofocus>
           			</div>
           			<button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Actualizar</button>
           		</form>

           	</div>
        </div>   			
	</div>
	
</body>
</html>