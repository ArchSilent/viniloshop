<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $nombre = $_POST['nombre'];
//     $descripcion = $_POST['descripcion'];
//     $precio = $_POST['precio'];

//     $sql = "INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
//     if ($conn->query($sql) === TRUE) {
//         echo "Producto agregado exitosamente.";
//     } else {
//         echo "Error: " . $conn->error;
//     }
// }

if (!empty($_POST['btn-registrar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    if(!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"])){
            $row=$conn->query("INSERT INTO productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')");
        if ($row ==true){
            echo"<div class='alert alert-success'>Producto agregado con exitos</div>";
        }else{
            echo"<div class='alert alert-danger'>Error al registrar</div>";
        }
    }else{
        echo"<div class='alert alert-danger'>Debes llenar todos los datos</div>";
    }
?>

<script> window.history.replaceState(null,null, window.location.pathname) </script>

<?php }
?>
