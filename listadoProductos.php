<?php
session_start();
require_once "controller/consultas.php";
require_once "controller/conexion.php";

if(empty($_SESSION)){
  header('Location: home.php');
}

$productos = obtenerProductos($db);

?>

<html lang="en">
<head>
  <!-- Required meta tags -->
  <?php include_once("partials/config.php") ?>


  <!-- Bootstrap CSS -->


  <title>Listado</title>
</head>
<body>
  <div class="container">
    <?php if($_SESSION["id"] = 1):?>
      <?php include_once("partials/headerAdmin.php")?>
      <?php else: ?>
        <?php include_once("partials/header.php")?>
      <?php endif?> 

    </div>
    
    <main>
      <div class="container">
        <div class="container">
          <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Nuestros Productos</h1>
          </div>
        </div>
        <div class="row">
         <?php foreach ($productos as $producto ) {?> 
          <div class="col-md-4">
              <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header"><?php echo $producto["nombre"]; ?></div>
                <div class="card-body text-primary">
                  <h5 class="card-title"><?php echo "precio: $".$producto["precio"]; ?></h5>
                  <p class="card-text"><?php echo $producto["descripcion"]; ?></p>
                </div>
              </div>
          </div>
        <?php }?>
      </div>
    </main>
    <?php include_once("partials/footer.php")?>
  </body>
  </html>
