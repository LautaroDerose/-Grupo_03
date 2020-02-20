<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="#">Cotillon DH!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FAQ.php">F.A.Q.</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item ">
              <a class="nav-link" href="añadir.php">Añadir producto</a>
          </li>
          <?php if(empty($_SESSION)):?>
          </ul>  
          <div class=" navbar-nav">
            <div class="nav-item ">
              <a class="nav-link" href="ingresar.php">Login</a>
            </div>
            <div class="nav-item ">
              <a class="nav-link" href="registro.php">Registro</a>
            </div>
            
          </div>
          <?php endif?>
           <?php if(!empty($_SESSION)):?>
          <li class="nav-item">
            <a class="nav-link" href="listadoProductos.php">Todos los Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="producto.php">Producto</a>
          </li>
        </ul>
        <div>
          <a class="nav-link" href="carrito.php"><img src="images/shopping-cart.svg" width="25px" height="25px" alt="carrito-icon" title="Carrito de compras"></a>
        </div>
        <div>
          <a class="nav-link" href="usuario.php" title="Usuario">Mis Datos</a>
        </div>
        <div>
          <a class="nav-link" href="salir.php" title="Usuario">Cerrar Sesion</a>
        </div>
        <?php endif?>
      </div>
    </nav>
  </header>