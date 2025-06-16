<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destiny</title>
    <link rel="stylesheet" href="menu.css">
     <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    


</head>
<body>

    <header class="Encabezado">
        <img src="C:\Users\emily\Downloads/destiny.jpg" alt="">
        <nav class="menu">
            <br><br>
            <a href="vuelos.php" class="styled-link">Vuelos</a>
            <a href="pages/" class="styled-link">Paquetes</a>
            <a href="hospedaje.php"class="styled-link">Hospedaje</a>
            <a href="autos.php" class="styled-link">Autos</a>
            <a href="contacto.php" class="styled-link">Contactos</a>
            <a href="#" class="carrito"><i class="fa-solid fa-cart-shopping"></i></a>
            <button class="boton"><a href="login.php">Ingresar</a></button>
        </nav>
    </header>
    
    <div id="carrito" class="carrito">
        <h3>🛒 Carrito</h3>
        <div id="carrito-items"></div>
        <p class="total">Total: $<span id="carrito-total">0.00</span></p>
    </div>

    <main>
        <h1>Explorá nuestros paquetes</h1>
        <div class="productos">
            <!-- Producto 1 -->
            <div class="card">
                <img src="brasil.jpg" alt="Paquete a Brasil">
                <h2>Paquete a Brasil</h2>
                <p class="precio">$800</p>
                <button onclick="agregarAlCarrito('Brasil 7 días', 800)">Agregar al carrito</button>
            </div>

            <!-- Producto 2 -->
            <div class="card">
                <img src="europa.jpg" alt="Tour por Europa">
                <h2>Tour por Europa</h2>
                <p class="precio">$1500</p>
                <button onclick="agregarAlCarrito('Europa 15 días', 1500)">Agregar al carrito</button>
            </div>

            <!-- Producto 3 -->
            <div class="card">
                <img src="patagonia.jpg" alt="Viaje a la Patagonia">
                <h2>Viaje a la Patagonia</h2>
                <p class="precio">$950</p>
                <button onclick="agregarAlCarrito('Bariloche 5 días', 950)">Agregar al carrito</button>
            </div>
        </div>
    </main>

    <script src="carrito.js"></script>

</body>
</html>