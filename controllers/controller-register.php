<?php
include('../db/conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $correo = $_POST['correo'];
    $tipo = $_POST['tipo'];

    $sql = "INSERT INTO usuarios (nombre, apellido, usuario, password, correo, tipo) 
            VALUES ('$nombre', '$apellido', '$usuario', '$password', '$correo', '$tipo')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
