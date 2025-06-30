<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Paquetes | Destiny</title>
  <link rel="stylesheet" href="css/estilos.css" />
  <script src="https://kit.fontawesome.com/a2e8e6b6a5.js" crossorigin="anonymous"></script>

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
      <span id="carrito-cantidad" class="carrito-contador">0</span>
      </a>
      <button class="boton"><a href="login.php">Ingresar</a></button>
    </nav>
  </header>

  <hr>
  <br><br><br><br>
  </header>

  
  <!-- CARRITO -->
  <div id="carrito" class="carrito-panel oculto">
    <h3>Tu carrito</h3>
    <div id="carrito-items" class="carrito-items"></div>
    <p>Total: $<span id="carrito-total">0.00</span></p>
  </div>

  <!-- PAQUETES -->
  <h1 style="text-align: center; margin-top: 100px;">Explorá nuestros paquetes turísticos</h1>

  <section class="productos">
    <div class="card">
      <img src="img/brasil.jpg" alt="Paquete Brasil">
      <h2>Paquete a Brasil</h2>
      <p class="precio">800</p>
      <button onclick="agregarAlCarrito('Brasil 7 días', 800)">Agregar al carrito</button>
    </div>
    <div class="card">
      <img src="img/europa.jpg" alt="Tour Europa">
      <h2>Tour por Europa</h2>
      <p class="precio">1500</p>
      <button onclick="agregarAlCarrito('Europa 15 días', 1500)">Agregar al carrito</button>
    </div>
    <div class="card">
      <img src="img/ny.jpg" alt="NYC">
      <h2>Escapada a NYC</h2>
      <p class="precio">1580</p>
      <button onclick="agregarAlCarrito('NYC 6 noches', 1580)">Agregar al carrito</button>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h3 class="footer-title">Seguinos en nuestras redes</h3>
        <div class="social-icons">
          <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        </div>
      </div>
      <div class="footer-section">
        <h3 class="footer-title">Atención al cliente</h3>
        <p>+54 11 3674 6789</p>
        <p>Lunes a domingos de 9 a 22 hs</p>
      </div>
      <div class="footer-section">
        <h3 class="footer-title">Destiny</h3>
        <ul class="footer-links">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Preguntas frecuentes</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- JS -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> 
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    let carrito = {};

    function agregarAlCarrito(nombre, precio) {
      if (carrito[nombre]) {
        carrito[nombre].cantidad += 1;
      } else {
        carrito[nombre] = { precio, cantidad: 1 };
      }
      renderizarCarrito();
    }

    function modificarCantidad(nombre, cambio) {
      if (carrito[nombre]) {
        carrito[nombre].cantidad += cambio;
        if (carrito[nombre].cantidad <= 0) {
          delete carrito[nombre];
        }
        renderizarCarrito();
      }
    }

    function renderizarCarrito() {
      const contenedor = document.getElementById('carrito-items');
      const total = document.getElementById('carrito-total');
      const contador = document.getElementById('carrito-cantidad');
      contenedor.innerHTML = '';
      let suma = 0;
      let cantidadTotal = 0;

      for (let producto in carrito) {
        const item = carrito[producto];
        suma += item.precio * item.cantidad;
        cantidadTotal += item.cantidad;

        const div = document.createElement('div');
        div.classList.add('item-carrito');

        const texto = document.createElement('span');
        texto.textContent = `${producto} x${item.cantidad}`;
        div.appendChild(texto);

        const btnSumar = document.createElement('button');
        btnSumar.textContent = '+';
        btnSumar.className = 'boton-cantidad';
        btnSumar.onclick = () => modificarCantidad(producto, 1);
        div.appendChild(btnSumar);

        const btnRestar = document.createElement('button');
        btnRestar.textContent = '-';
        btnRestar.className = 'boton-cantidad';
        btnRestar.onclick = () => modificarCantidad(producto, -1);
        div.appendChild(btnRestar);

        contenedor.appendChild(div);
      }

      total.innerText = suma.toFixed(2);
      contador.innerText = cantidadTotal;
    }

    document.addEventListener("DOMContentLoaded", () => {
      const toggleBtn = document.getElementById("carrito-toggle");
      const carritoBox = document.getElementById("carrito");

      toggleBtn.addEventListener("click", (e) => {
        e.preventDefault();
        carritoBox.classList.toggle("oculto");
      });
    });
  </script>
</body>
</html>
