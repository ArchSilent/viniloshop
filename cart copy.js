// Cargar el carrito desde localStorage o inicializarlo vacío
let cart = JSON.parse(localStorage.getItem("carrito")) || [];

// Función para agregar un producto al carrito desde la página principal
function agregarProducto(id, nombre, precio) {
    const productoExistente = cart.find((producto) => producto.id === id);

    if (productoExistente) {
        productoExistente.cantidad++;
    } else {
        cart.push({ id, nombre, precio, cantidad: 1 });
    }

    // Guardar en localStorage
    localStorage.setItem("carrito", JSON.stringify(cart));
    alert(`${nombre} agregado al carrito.`);
}

// Función para cargar y mostrar los productos en el carrito
function mostrarCarrito() {
    const cartItemsContainer = document.getElementById("cart-items");
    const totalPriceElement = document.getElementById("total-price");

    // Limpiar el contenido previo
    cartItemsContainer.innerHTML = "";

    if (cart.length === 0) {
        cartItemsContainer.innerHTML = "<tr><td colspan='6'>Tu carrito está vacío.</td></tr>";
        totalPriceElement.textContent = "Total: $0.00";
        return;
    }

    let totalPrice = 0;

    // Recorrer los productos en el carrito
    cart.forEach((producto, index) => {
        const totalProducto = producto.precio * producto.cantidad;
        totalPrice += totalProducto;

        // Crear una fila para cada producto
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${producto.nombre}</td>
            <td>$${producto.precio.toFixed(2)}</td>
            <td>
                <button onclick="actualizarCantidad(${producto.id}, -1)">-</button>
                ${producto.cantidad}
                <button onclick="actualizarCantidad(${producto.id}, 1)">+</button>
            </td>
            <td>$${totalProducto.toFixed(2)}</td>
            <td><button onclick="eliminarProducto(${producto.id})">Eliminar</button></td>
        `;
        cartItemsContainer.appendChild(row);
    });

    // Mostrar el total del carrito
    totalPriceElement.textContent = `Total: $${totalPrice.toFixed(2)}`;
}

// Función para actualizar la cantidad de un producto
function actualizarCantidad(id, cambio) {
    const producto = cart.find((producto) => producto.id === id);

    if (producto) {
        producto.cantidad += cambio;
        if (producto.cantidad <= 0) {
            eliminarProducto(id);
        } else {
            localStorage.setItem("carrito", JSON.stringify(cart));
            mostrarCarrito();
        }
    }
}

// Función para eliminar un producto del carrito
function eliminarProducto(id) {
    cart = cart.filter((producto) => producto.id !== id);
    localStorage.setItem("carrito", JSON.stringify(cart));
    mostrarCarrito();
}

// Función para finalizar la compra
function finalizarCompra() {
    if (cart.length === 0) {
        alert("Tu carrito está vacío.");
        return;
    }

    alert("Gracias por tu compra.");
    cart = [];
    localStorage.setItem("carrito", JSON.stringify(cart));
    mostrarCarrito();
}

// Cargar el carrito al iniciar la página
document.addEventListener("DOMContentLoaded", mostrarCarrito);
