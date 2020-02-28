<?php 

session_start();
require_once "controller/validar.php";
require_once "controller/consultas.php";
require_once "controller/conexion.php";

$error = "";
if(empty($_SESSION)){
	header('Location: home.php');
}

if (!empty($_GET)) {
	$productos = obtenerProductoId($db, $_GET["idProd"]);
} elseif (!empty($_POST)){
	$error = validarDatosProducto($_POST);
	if (count($error==0)) {
		editarProducto($db, $_POST);
		header('Location: listadoProductos.php');
	}
	
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
							<?php if (!empty($_GET)):  ?>
								<input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="nombre" value="<?= $productos["nombre"]?>" autofocus>
								<?php else: ?>

									<input type="text" id="inputNombre" class="form-control mb-4" name="nombre" placeholder="Nombre"  value="<?= persistirDato($error, 'nombre') ?>">
									<small  class="text-danger"> <?= isset($error['nombre']) ? $error['nombre'] : "" ?></small>
								</div>
							<?php endif ?>

							<div class="form-group">
								<label for="inputPrecio" class="sr-only">Precio</label>
								<?php if (!empty($_GET)):  ?>
									<input type="text" id="inputPrecio" name="precio" class="form-control" placeholder="Precio" value="<?= $productos["precio"]?>" autofocus>
									<?php else: ?>

										<input type="text" id="inputPrecio" class="form-control mb-4" name="precio" placeholder="Precio"  value="<?= persistirDato($error, 'precio') ?>">
										<small  class="text-danger"> <?= isset($error['precio']) ? $error['precio'] : "" ?></small>
									</div>
								<?php endif ?>

								<div class="form-group">
									<label for="inputDescripcion" class="sr-only">Descripcion</label>
									<?php if (!empty($_GET)):  ?>
										

										<textarea id="inputDescripcion" name="descripcion" class="md-textarea form-control" placeholder="Descripcion" rows="3" ><?= $productos["descripcion"]?></textarea>

										<?php else: ?>
												

											<label for="inputDescripcion" class="sr-only">Descripcion</label>
                 							 <textarea id="inputDescripcion" name="descripcion" value="<?= persistirDato($error, 'descripcion') ?>" class="md-textarea form-control" placeholder="Descripcion" rows="3" ></textarea>
                  							<small  class="text-danger"> <?= isset($error['descripcion']) ? $error['descripcion'] : "" ?></small>
										</div>
									<?php endif ?>

									<button class="btn btn-lg btn-primary btn-block black-background white" type="submit">Actualizar</button>
								</form>

							</div>
						</div>   			
					</div>

				</body>
				</html>