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
    // Redireccionar
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
  </head>
    <body>
        <div class="login-container">
        <h2>Iniciar Sesión</h2>
    <form action="login.php" method="POST">
        <input type="text" name="nombre" placeholder="nombre" required />
        <input type="email" name="email" placeholder="Correo electrónico" required />
        <input type="password" name="password" placeholder="Contraseña" required />
        <button type="submit">Ingresar</button>
    </form>

  </div>
</body>
</html>
