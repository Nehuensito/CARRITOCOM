<?php
include 'conexion.php';  // Asegurate de que exista y esté en la misma carpeta

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Tomamos los datos del formulario correctamente
$nombre = $_POST['nombre'] ?? '';
  $correo = $_POST['email'] ?? '';
  $contraseña = $_POST['password'] ?? '';

  // Validar que no estén vacíos
  if (!empty($correo) && !empty($contraseña)) {
    // Insertar datos
    $insertar = "INSERT INTO usuario (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
    $resultado = mysqli_query($conexion, $insertar);

    if ($resultado) {
      echo "✅ Registro exitoso.";
    } else {
      echo "❌ Error al registrar: " . mysqli_error($conexion);
    }
  } else {
    echo "❗ Faltan campos obligatorios.";
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
