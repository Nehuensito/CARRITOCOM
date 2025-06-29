<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Autos | Destiny</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <!-- Font Awesome para el carrito -->
  <script src="https://kit.fontawesome.com/a2e8e6b6a5.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- ENCABEZADO -->
  <header class="Encabezado">
    <div class="logo-container">
      <img src="img/destiny.jpg" alt="Logo Destiny" />
    </div>

    <!-- Menú respetado exactamente -->
    <nav class="menu">
      <a href="vuelos.php" class="styled-link">Vuelos</a>
      <a href="pages/" class="styled-link">Paquetes</a>
      <a href="hospedaje.php" class="styled-link">Hospedaje</a>
      <a href="autos.php" class="styled-link">Autos</a>
      <a href="contacto.php" class="styled-link">Contactos</a>
      <a href="#" class="carrito"><ion-icon name="cart"></ion-icon></a>
      <button class="boton"><a href="login.php">Ingresar</a></button>
    </nav>
  </header>

  <hr><br><br><br><br>

  <!-- TÍTULO -->
  <h1>Alquiler de autos al mejor precio</h1>

  <!-- FORMULARIO DE AUTOS -->
  <form action="resultados_autos.php" method="GET">
    <h2>Buscá un auto para tu viaje</h2>

    <input type="text" name="lugar" placeholder="Lugar de retiro..." required />
    <input type="date" name="fecha_inicio" required />
    <input type="date" name="fecha_fin" required />
    <input type="text" name="tipo" placeholder="Tipo de auto (Ej: SUV, Económico...)" />

    <input type="submit" value="Buscar autos" id="boton" />
  </form>

  <br><br><br><br>

  <!-- FOOTER -->
  <footer class="destiny-footer">
    <div class="footer-container">

      <div class="footer-section">
        <h3 class="footer-title">Seguinos en nuestras redes</h3>
        <div class="social-icons">
          <a href="#" class="social-icon"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#" class="social-icon"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#" class="social-icon"><ion-icon name="logo-twitter"></ion-icon></a>
        </div>
      </div>

      <div class="footer-section">
        <h3 class="footer-title">Atención al cliente y ventas</h3>
        <p class="footer-text">+54 113674 6789</p>
        <p class="footer-text">Lunes a domingos y feriados de 9 a 22 hs</p>
      </div>

      <div class="footer-section">
        <h3 class="footer-title">DESTINY</h3>
        <ul class="footer-links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Preguntas frecuentes</a></li>
        </ul>
      </div>

    </div>
  </footer>

  <!-- IONICONS -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
