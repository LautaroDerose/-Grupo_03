<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once("partials/config.php") ?>
	<title>Carrito</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
	<?php include_once("partials/header.php")?>

	<section class="ml-4 mt-4">
		<div class="row pt-4">
			<div class="col-lg-6 col-md-4 col-xs-12 ">
				<h2>Producto</h2>
				<a href="#"><img class="img-responsive" src="images/globos.svg" height="300px" width="220px" alt ="image-producto"></a>
				<button type="button" class="btn btn-primary btn-block">Ver productos similares</button>
			</div>

			<div class="col-lg-5 col-md-4 col-xs-12  mt-4 mr-1">
				<table class="table table-hover table-bordered">
					<tbody>
						<thead>
							<th colspan="2">RESUMEN DE COMPRA</th>
						</thead>
						<tr>
							<th scope="row">Producto</th>
							<td>Computer</td>
						</tr>
						<tr>
							<th scope="row">Subtotal</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Total</th>
							<td></td>
						</tr>
					</tbody>
				</table>
				<button type="button" class="btn btn-primary">Continuar comprando</button>
				<button type="button" class="btn btn-outline-success float-right">Pagar</button>

			</div>
		</div>
		<div class ="row justify-content-md-center mt-4">
			<div class=" col-lg-6 col-lg-offset-2 col-md-4 col-xs-12 mt-4 ">
				<h2>Caracteristicas del producto</h2>
				<table class="table table-hover table-borderless">
					<tbody>
						<tr>
							<th scope="row">Producto:</th>
							<td>Computer</td>
						</tr>
						<tr>
							<th scope="row">Marca</th>
							<td></td>
						</tr>
						<tr>
							<th scope="row">Modelo</th>
							<td></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</section>

<?php include_once("partials/footer.php")?>
</body>
</html>
