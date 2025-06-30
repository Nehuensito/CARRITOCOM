<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = trim($_POST['nombre'] ?? '');
  $correo = trim($_POST['email'] ?? '');
  $contraseña = trim($_POST['password'] ?? '');

  // Validación básica
  if (empty($nombre) || empty($correo) || empty($contraseña)) {
    echo "<div class='alert alert-danger mt-4'>Por favor, completá todos los campos.</div>";
  } else {
    // Verificar si el usuario ya existe
    $stmt = $conexion->prepare("SELECT id FROM usuario WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      echo "<div class='alert alert-danger mt-4'>Este correo ya está registrado.</div>";
    } else {
      // Insertar nuevo usuario
      $stmt = $conexion->prepare("INSERT INTO usuario (nombre, correo, contraseña) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $nombre, $correo, $contraseña);

      if ($stmt->execute()) {
        echo "<div class='alert alert-success mt-4'>Registro exitoso. ¡Ya podés iniciar sesión!</div>";
        // header("Location: login.php");
      } else {
        echo "<div class='alert alert-danger mt-4'>Error al registrar. Intentalo de nuevo.</div>";
      }
    }

    $stmt->close();
  }
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
  <h2>Crear cuenta</h2>
  <form action="register.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre completo" required />
    <input type="email" name="email" placeholder="Correo electrónico" required />
    <input type="password" name="password" placeholder="Contraseña" required />
    <button type="submit">Registrarse</button>
  </form>
  <h2>¿Ya tenes una cuenta?</h2>
    <a href="login.php"><button type="submit">login</button></a>
 </div>


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

