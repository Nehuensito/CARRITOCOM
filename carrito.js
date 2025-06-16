let carrito = {};

function agregarAlCarrito(nombre, precio) {
    if (carrito[nombre]) {
        carrito[nombre].cantidad += 1;
    } else {
        carrito[nombre] = { precio, cantidad: 1 };
    }
    renderizarCarrito();
}

function renderizarCarrito() {
    const contenedor = document.getElementById('carrito-items');
    const total = document.getElementById('carrito-total');
    contenedor.innerHTML = '';
    let suma = 0;

    for (let producto in carrito) {
        const item = carrito[producto];
        suma += item.precio * item.cantidad;

        // Crear el contenedor del producto
        const div = document.createElement('div');
        div.classList.add('item-carrito');

        // Texto del producto y cantidad
        const texto = document.createElement('span');
        texto.textContent = `${producto} x${item.cantidad}`;
        div.appendChild(texto);

        // Botón "+"
        const btnSumar = document.createElement('button');
        btnSumar.textContent = '+';
        btnSumar.className = 'boton-cantidad';
        btnSumar.onclick = () => modificarCantidad(producto, 1);
        div.appendChild(btnSumar);

        // Botón "-"
        const btnRestar = document.createElement('button');
        btnRestar.textContent = '-';
        btnRestar.className = 'boton-cantidad';
        btnRestar.onclick = () => modificarCantidad(producto, -1);
        div.appendChild(btnRestar);

        // Agregar el item al contenedor
        contenedor.appendChild(div);
    }

    total.innerText = suma.toFixed(2);
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
// Esperar al DOM para agregar el evento
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("carrito-toggle");
    const carrito = document.getElementById("carrito");

    toggleBtn.addEventListener("click", () => {
        carrito.classList.toggle("oculto");
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.getElementById("carrito-toggle");
    const carritoBox = document.getElementById("carrito");

    toggleBtn.addEventListener("click", (e) => {
        e.preventDefault(); // evita salto de link #
        carritoBox.classList.toggle("oculto");
    });
});
