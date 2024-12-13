<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Vinilos</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="fotos/logo3.jpg" alt="Logo de la tienda" id="logo">
        </div>
        <nav>
            <ul class="nav-links">
                <li><button onclick="location.href='login.php'">Iniciar sesión</button></li>
                <li><button onclick="location.href='registro.php'">Regístrate</button></li>
                <li>
                    <button onclick="location.href='carrito.html'">
                        Carrito <span id="cart-count">(0)</span>
                    </button>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <aside class="image-sidebar">
            <img src="fotos/fondo1.jpg" alt="Imagen principal" class="vertical-image">
        </aside>
        <section class="products-section">
            <h2>Todos los Productos</h2>
            <div class="products-gallery">
                <!-- Producto 1 -->
                <div class="product-item">
                    <img src="fotos/VINIL2.jpg" alt="LANA DEL REY">
                    <p>LANA DEL REY</p>
                    <p>$340.00</p>
                    <button onclick="agregarProducto(1, 'LANA DEL REY', 340.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 2 -->
                <div class="product-item">
                    <img src="fotos/VINIL1.jpg" alt="MORAT">
                    <p>MORAT</p>
                    <p>$990.00</p>
                    <button onclick="agregarProducto(2, 'MORAT', 990.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 3 -->
                <div class="product-item">
                    <img src="fotos/VINIL3.jpg" alt="INDIE FOLK">
                    <p>INDIE FOLK</p>
                    <p>$1,090.00</p>
                    <button onclick="agregarProducto(3, 'INDIE FOLK', 1090.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 4 -->
                <div class="product-item">
                    <img src="fotos/VINIL4.jpg" alt="LUIS MIGUEL">
                    <p>LUIS MIGUEL</p>
                    <p>$1,090.00</p>
                    <button onclick="agregarProducto(4, 'LUIS MIGUEL', 1090.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 5 -->
                <div class="product-item">
                    <img src="fotos/VINIL5.jpg" alt="SHAWN MENDES">
                    <p>SHAWN MENDES</p>
                    <p>$1,090.00</p>
                    <button onclick="agregarProducto(5, 'SHAWN MENDES', 1090.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 6 -->
                <div class="product-item">
                    <img src="fotos/VINIL9.jpg" alt="HARRY STYLES">
                    <p>HARRY STYLES</p>
                    <p>$1,090.00</p>
                    <button onclick="agregarProducto(6, 'HARRY STYLES', 1090.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 7 -->
                <div class="product-item">
                    <img src="fotos/VINIL10.jpg" alt="MICHAEL JACKSON">
                    <p>MICHAEL JACKSON</p>
                    <p>$1,090.00</p>
                    <button onclick="agregarProducto(7, 'MICHAEL JACKSON', 1090.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 8 -->
                <div class="product-item">
                    <img src="fotos/VINIL12.jpg" alt="QUEEN">
                    <p>QUEEN</p>
                    <p>$1,090.00</p>
                    <button onclick="agregarProducto(8, 'QUEEN', 1090.00)">Agregar al carrito</button>
                </div>
                <!-- Producto 9 -->
                <div class="product-item">
                    <img src="fotos/VINIL11.jpg" alt="ELTON JOHN">
                    <p>ELTON JOHN</p>
                    <p>$1,090.00</p>
                    <button onclick="agregarProducto(9, 'ELTON JOHN', 1090.00)">Agregar al carrito</button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Tienda de Vinilos. Todos los derechos reservados.</p>
        <div class="social-links">
            <a href="https://facebook.com" target="_blank">Facebook</a> | 
            <a href="https://instagram.com" target="_blank">Instagram</a>
        </div>
    </footer>
    <script src="cart.js"></script>
</body>
</html>

