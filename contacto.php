<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include_once("partials/config.php") ?>
  <link rel="stylesheet" href="css/contacto.css">
  <title>Contacto</title>
</head>
<body>
  <div class="container">
    <?php include_once("partials/header.php") ?>
 

  
    <form id="contact" action="" method="post">
      <h3>Contactenos</h3>
      <fieldset>
        <input placeholder="Nombre" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="E-mail" type="email" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Celular" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <textarea placeholder="Deja tu mensaje aquí..." tabindex="5" required></textarea>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="submit">Enviar</button>
      </fieldset>
    </form>


  </div>


<?php include_once("partials/footer.php")?>
</body>
</html>
