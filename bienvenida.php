<?php
session_start();

if(empty($_SESSION)){
	header('Location: home.php');
}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php include_once("partials/config.php") ?>
  <title>Home</title>
</head>
<body>
<div class="container">

	<?php include_once("partials/header.php") ?>	
	
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1>Bienvenido a Cotillon DH! <?= $_SESSION["nombre"] ?></h1>	
    		<p class="lead">Ahora puedes realizar busquedas de tus productos favoritos y comprarlos!.</p>
  		</div>
	</div>
</div>
	


 <?php include_once("partials/footer.php")?>
</body>
</html>