<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $correo = $_POST['email'] ?? '';
  $contraseña = $_POST['password'] ?? '';

  // Consulta segura con sentencia preparada
  $stmt = $conexion->prepare("SELECT * FROM usuario WHERE correo = ? AND contraseña = ?");
  $stmt->bind_param("ss", $correo, $contraseña);
  $stmt->execute();
  $resultado = $stmt->get_result();

  if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();
    $_SESSION['usuario'] = $usuario['nombre'];

    echo "<div class='alert alert-success mt-4'>Bienvenido, " . htmlspecialchars($usuario['nombre']) . ".</div>";
    // header("Location: home.php");
    // exit();
  } else {
    echo "<div class='alert alert-danger mt-4'>Correo o contraseña incorrectos.</div>";
  }

  $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
  <title>Login - Portal Deportivo</title>
  
 

  </head>
    <body>
      <header class="Encabezado">
    <img src="img/destiny.jpg" alt="Destiny logo" width="120" />
    <nav class="menu">
      <div class="boton">
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
    <h2>¿todavia no tenes una cuenta?</h2>
    <a href="registro.php"><button type="submit">Registro</button></a>

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
