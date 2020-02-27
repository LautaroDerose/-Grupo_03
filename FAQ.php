<?php

session_start();
require_once "controller/conexion.php";
require_once "controller/consultas.php";


if (!empty($_POST)){
  insertarPregunta($db, $_POST);
  header('Location: FAQ.php');
}

$preguntas = obtenerPreguntas($db);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include_once("partials/config.php") ?>
  <title>FAQ</title>
</head>
<body>
  <div class="container">
  <?php if(!empty($_SESSION) and $_SESSION["email"] == "admin@admin.com"):?>
    <?php include_once("partials/headerAdmin.php")?>
  <?php else: ?>
    <?php include_once("partials/header.php")?>
  <?php endif?> 

    <?php if(!empty($_SESSION)): ?>
      <div class ="row justify-content-md-center mt-4">
          <div class="col-lg-4 col-md-6 col-xs-12 ">
            <form class="form-signin" action="FAQ.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                    <div>
                      <label for="inputTitulo">Titulo</label>
                      <input type="text" id="inputTitulo" name="titulo" class="form-control" placeholder="Titulo"  autofocus>
                    </div>
                     <div class="md-form amber-textarea active-amber-textarea-2">
                        <label for="pregunta">Ingese la pregunta</label>
                        <textarea id="pregunta" name="pregunta" class="md-textarea form-control" rows="3"></textarea>
                      </div>
                      <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
      </div>
      <?php endif?>
            <div class="accordion" id="accordionExample">
              <?php foreach ($preguntas as $pregunta ) : ?>
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <?= $pregunta["titulo"] ?>
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <?= $pregunta["pregunta"]?>
                  </div>
                </div>
              </div>
              <?php endforeach?>
            </div>




  </div>

  <?php include_once("partials/footer.php")?>
  </body>
</html>
