<?php
session_start();
if ($_SESSION['tipo'] != 'Usuario') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Panel del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1>Bienvenido, Usuario <?php
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    echo $usuario;
} else {
    echo "No hay usuario logueado.";
}
?></h1>
<nav>
    <a href="controllers/cerrar-sesion.php">Cerrar Sesión</a>
</nav>
<section>
    <h2>Lista de Productos</h2>
    <table border="1" class="table table-striped-columns">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('db/conexion.php');
            $sql = "SELECT * FROM productos";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nombre']}</td>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['precio']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
