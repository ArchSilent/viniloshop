<?php
include('../db/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado exitosamente.";
} else {
    echo "Error: " . $conn->error;
}
?>
