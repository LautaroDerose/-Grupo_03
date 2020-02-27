<?php
session_start();

if(empty($_SESSION)){
  header('Location: home.php');
}

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include_once("partials/config.php") ?>
    

    <!-- Bootstrap CSS -->
    

    <title>Producto</title>
  </head>
  <body>
    <div class="container">
  <?php if($_SESSION["email"] == "admin@admin.com"):?>
    <?php include_once("partials/headerAdmin.php")?>
  <?php else: ?>
    <?php include_once("partials/header.php")?>
  <?php endif?> 
    </div>
    
    <main>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card mt-4">
              <img class="card-img-top img-responsive mt-4" height="200px" src="images/globos.svg" alt="">
              <div class="card-body">
                <h3 class="card-title">Nombre del Producto</h3>
                <h4>$24.99</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
                <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                4.0 estrellas
              </div>
            </div>
            <div class="card card-outline-secondary my-4">
              <div class="card-header">
                Reseñas
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Autor</small>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Autor</small>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
                <small class="text-muted">Autor</small>
                <hr>
                <a href="#" class="btn btn-success">Dejar una reseña</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once("partials/footer.php")?>
</body>
</html>
