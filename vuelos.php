<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vuelos | Destiny</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/estilos.css" />

  <!-- Fuente e íconos -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap">
</head>

<body>

  <!-- ENCABEZADO -->
  <header class="Encabezado">
    <div class="logo-container">
      <img src="imagenes/destiny.jpg" alt="Logo Destiny" />
    </div>
    <nav class="menu">
      <a href="vuelos.php" class="styled-link">Vuelos</a>
      <a href="paquetes.php" class="styled-link">Paquetes</a>
      <a href="hospedaje.php" class="styled-link">Hospedaje</a>
      <a href="autos.php" class="styled-link">Autos</a>
      <a href="contacto.php" class="styled-link">Contactos</a>
      <a href="#" class="carrito"><ion-icon name="cart"></ion-icon></a>
      <button class="boton"><a href="login.php">Ingresar</a></button>
    </nav>
  </header>

  <hr>
  <br><br><br><br>

  <!-- TÍTULO PRINCIPAL -->
  <h1 style="text-align: center;">
    Buscá tu vuelo ideal <br>
    ¡Descubrí nuevas aventuras!
  </h1>

  <!-- FORMULARIO DE VUELOS -->
  <form action="resultados_vuelos.php" method="GET" class="formulario-vuelos">
  <h2>Completá tus datos</h2>

  <div class="radio-group">
    <label><input type="radio" name="tipo_vuelo" value="ida"> Solo ida</label>
    <label><input type="radio" name="tipo_vuelo" value="ida_vuelta"> Ida y vuelta</label>
  </div>

    <input type="text" name="origen" placeholder="Ciudad de origen" required style="width:100%; padding:10px; margin-bottom:15px;">
    <input type="text" name="destino" placeholder="Ciudad de destino" required style="width:100%; padding:10px; margin-bottom:15px;">
    <input type="date" name="fecha_salida" required style="width:100%; padding:10px; margin-bottom:15px;">
    <input type="date" name="fecha_regreso" style="width:100%; padding:10px; margin-bottom:15px;">
    <input type="number" name="pasajeros" placeholder="Cantidad de pasajeros" min="1" max="10" required style="width:100%; padding:10px; margin-bottom:20px;">

    <input type="submit" value="Buscar vuelos" id="boton" style="width:100%; padding:10px;">
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

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
