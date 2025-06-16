<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $correo = $_POST['correo'] ?? '';
  $contraseña = $_POST['contraseña'] ?? '';

  // Buscar usuario
  $query = "SELECT * FROM usuario WHERE correo='$correo' AND contraseña='$contraseña'";
  $resultado = mysqli_query($conexion, $query);

  if (mysqli_num_rows($resultado) == 1) {
    $usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['usuario'] = $usuario['nombre'];  // O puedes guardar más datos si querés

    echo "<div class='alert alert-success mt-4'>Bienvenido, " . htmlspecialchars($usuario['nombre']) . ".</div>";
    // Redireccionars
    // header("Location: home.php");
    // exit();
  } else {
    echo "<div class='alert alert-danger mt-4'>Correo o contraseña incorrectos.</div>";
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Portal Deportivo</title>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand">Brand</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
            </li>
          </ul>
        </div>
      </nav>
      <header class="Encabezado">
        <img src="C:\Users\emily\Downloads/destiny.jpg" alt="">
        <nav class="menu">
            <br><br>
            <a href="vuelos.php" class="styled-link">Vuelos</a>
            <a href="pages/" class="styled-link">Paquetes</a>
            <a href="hospedaje.php"class="styled-link">Hospedaje</a>
            <a href="autos.php" class="styled-link">Autos</a>
            <a href="contacto.php" class="styled-link">Contactos</a>
            <a href="#" class="carrito"><i class="fa-solid fa-cart-shopping"></i></a>
            <button class="boton"><a href="login.php">Ingresar</a></button>
        </nav>
    </header>
        <div class="login-container">
        <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Correo electrónico" required />
        <input type="password" name="password" placeholder="Contraseña" required />
        <button type="submit">Ingresar</button>
    </form>

  </div>
</body>
</html>
