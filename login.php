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
  <link rel="stylesheet" href="styles.css">
  <title>Login - Portal Deportivo</title>
 

  </head>
    <body>
      <header class="Encabezado">
    <img src="destiny.jpg" alt="Destiny logo" width="120" />
    <nav class="menu">
      <a href="vuelos.php" class="styled-link">Vuelos</a>
      <a href="paquetes.php" class="styled-link">Paquetes</a>
      <a href="hospedaje.php" class="styled-link">Hospedaje</a>
      <a href="autos.php" class="styled-link">Autos</a>
      <a href="contacto.php" class="styled-link">Contactos</a>

      <div class="carrito">
        <a href="#" id="toggleCarrito"><i class="fa-solid fa-cart-shopping"></i></a>
        <div id="carrito-dropdown">
          <p>Tu carrito está vacío.</p>
        </div>
      </div>

      <div class="boton">
        <a href="login.php">Ingresar</a>
      </div>
    </nav>
  </header>

  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="Correo electrónico" required class="form-control mb-2"/>
      <input type="password" name="password" placeholder="Contraseña" required class="form-control mb-3"/>
      <button type="submit" class="btn btn-dark w-100">Ingresar</button>
    </form>
  </div>

  <!-- JS -->
  <script>
    const toggleCarrito = document.getElementById('toggleCarrito');
    const carritoDropdown = document.getElementById('carrito-dropdown');

    toggleCarrito.addEventListener('click', (e) => {
      e.preventDefault();
      carritoDropdown.style.display = carritoDropdown.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (e) => {
      if (!toggleCarrito.contains(e.target) && !carritoDropdown.contains(e.target)) {
        carritoDropdown.style.display = 'none';
      }
    });
  </script>
</body>
</html>
