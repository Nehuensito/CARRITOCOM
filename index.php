<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Paquetes | Destiny</title>
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

  <hr><br><br><br>

  <!-- TÍTULO -->
  <h1>Paquetes turísticos que te van a encantar</h1>

  <!-- CONTENEDOR DE PAQUETES -->
  <section class="paquetes-container">
    <div class="paquete-card">
      <img src="img/paris.jpg" alt="París">
      <div class="paquete-info">
        <h3>París romántico</h3>
        <p>5 noches, hotel 4★ + vuelo ida y vuelta.</p>
        <p class="paquete-precio">USD 1.250</p>
        <a href="#" class="paquete-btn">Ver más</a>
      </div>
    </div>

    <div class="paquete-card">
      <img src="img/rio.jpg" alt="Río de Janeiro">
      <div class="paquete-info">
        <h3>Río de Janeiro</h3>
        <p>4 noches, hotel 3★ con desayuno y traslados.</p>
        <p class="paquete-precio">USD 720</p>
        <a href="#" class="paquete-btn">Ver más</a>
      </div>
    </div>

    <div class="paquete-card">
      <img src="img/ny.jpg" alt="Nueva York">
      <div class="paquete-info">
        <h3>Escapada a NYC</h3>
        <p>6 noches, vuelo directo y alojamiento céntrico.</p>
        <p class="paquete-precio">USD 1.580</p>
        <a href="#" class="paquete-btn">Ver más</a>
      </div>
    </div>
  </section>

  <br><br>

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
