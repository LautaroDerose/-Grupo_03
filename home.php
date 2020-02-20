
<?php

session_start();

if (!empty($_SESSION)) {
	header('Location: bienvenida.php');
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

	 <?php if($_SESSION["id"] = 1):?>
    <?php include_once("partials/headerAdmin.php")?>
  <?php else: ?>
    <?php include_once("partials/header.php")?>
  <?php endif?> 
	
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1 class="display-4">Bienvenido a cotillon dh! </h1>
    		<p class="lead">Aca vas a encontrar los productos mas variados y al mejor precio :).</p>
  		</div>
	</div>
</div>

 <?php include_once("partials/footer.php")?>
</body>
</html>
