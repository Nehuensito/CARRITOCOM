<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <h1>Portal Deportivo</h1>
    <p>Tu lugar para comprar todo lo necesario para deportes al aire libre</p>
  </header>
  <main>
    <a class="btn" href="login.html">Iniciar sesión</a>
    <a class="btn" href="login.php" target="_blank">Registrarse</a>
  </main>
  <?php
header("Location: login.php");
exit();
?>
</body>
</html>