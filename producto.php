<?php
session_start();
if ($_SESSION['tipo'] != 'Administrador') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Producto</title>
</head>
<body>
<h1>Agregar un Nuevo Producto</h1>
<nav>
    <a href="panel_administrador.php">Volver al Panel</a>
</nav>
<form method="POST" action="controllers/controller-agregar_producto.php">
    <label for="nombre">Nombre del Producto:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="descripcion">Descripción:</label><br>
    <textarea id="descripcion" name="descripcion" rows="5" cols="40" required></textarea><br><br>

    <label for="precio">Precio:</label><br>
    <input type="number" id="precio" name="precio" step="0.01" required><br><br>

    <button type="submit">Agregar Producto</button>
</form>
</body>
</html>