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
		<h1>Bienvenido a Cotillon DH! <?= $_SESSION["nombre"] ?></h1>	
	</div>

	


 <?php include_once("partials/footer.php")?>
</body>
</html>