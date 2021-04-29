<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Obligame Perro!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../view/panel.php">Productos
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../view/registroproductos.php">Alta productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../view/registroadministradores.php">Alta administrador</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="../data/cerrar.php">Cerrar Sesión</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <!--<input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>-->
      <br>
      <p class="nav-link mt-2">Bienvenido: <?php echo $_SESSION['correo']; ?></p>
    </div>
  </div>
</nav>