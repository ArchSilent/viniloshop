<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $id = $_POST['id'];
//     $nombre = $_POST['nombreAc'];
//     $descripcion = $_POST['descripcionAc'];
//     $precio = $_POST['precioAC'];
// // echo $id;
//     $sql = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id=$id";
//     if ($conn->query($sql) === TRUE) {
//         echo "Producto actualizado exitosamente.";
//     } else {
//         echo "Error: " . $conn->error;
//     }
// }
if(!empty('btn-modificar')){
    $id = $_POST['txtid'];
    $nombre = $_POST['nombreAc'];
    $descripcion = $_POST['descripcionAc'];
    $precio = $_POST['precioAC'];

    echo$id;
    echo$nombre;
    echo$descripcion;
    echo $precio;
    if(!empty($nombre) && !empty($descripcion) && !empty($precio) ){
        $sql = $conn->query("UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio=$precio WHERE id=$id") ;
        if ($sql==true) {
            echo"<div class='alert alert-success'>Productos modificados correctamente</div>";
        } else {
            echo"<div class='alert alert-danger'>Error al midificar</div>";
        }
    
    }else{
        echo"<div class='alert alert-danger'>Faltan datos por modificar</div>";
    }?>

<script> window.history.replaceState(null,null, window.location.pathname) </script>

<?php    
}
?>
