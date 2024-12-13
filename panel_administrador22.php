<div?php
session_start();
if ($_SESSION['tipo'] != 'Administrador') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Panel del Administrador</title>
</head>
<body>
<h1 class="text-center text-secondary font-weight-bold p-4">Gestión de Productos</h1>
<nav>
    <a href="controllers/cerrar-sesion.php">Cerrar Sesión</a>
</nav>
<section>
    <h2>Bienvenido, Administrador <?php
    session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    echo $usuario;
} else {
    echo "No hay usuario logueado.";
}
?></h2>
    <!-- <a href="producto.php">Agregar Producto</a> -->
<div class="p-3 table-responsive">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo Registro
</button>

<!-- Modal Agregar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <?php 
            include('db/conexion.php');
            // include_once('');
            include('controllers/controller-agregar_producto.php'); ?> 
            <input type="text" class="form-control" name="nombre" placeholder="Nombre"><br>
            <div class="form-floating">
                <textarea class="form-control" name="descripcion" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Descripcion breve del albume</label>
            </div><br> 
            <input type="text" class="form-control" name="precio" placeholder="Precio"><br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"   value="ok" name="btn-registrar" class="btn btn-success">Agregar Producto</button>
      </div>
      </form>
    </div>
  </div>
</div>
    <!-- modalend  -->
    <table class="table table-hover table-striped-columns">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        
            <?php
            include('db/conexion.php');
            $sql = "SELECT * FROM productos";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['descripcion'] ?></td>
                        <td><?php echo $row['precio'] ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Editar</button>
                            <a href="controllers/controller-eliminar_producto.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                      </tr>
                        <!-- Modal Editar-->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel2">Actualizacion de datos</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form action="" method="post">
                                            <?php 
                                            $datoscategoria = $conn->query("SELECT * FROM productos");
                                            while($datos =$datoscategoria->fetch_object()){
                                                $row->id == $datos->id; 
                                            }
                                            ?>
                                        <!-- Inputs modal agregar -->
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>"><br>
                                        <div class="form-floating">
                                            <textarea class="form-control" name="descripcion" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2"><?php echo $row['descripcion'] ?></label>
                                        </div><br> 
                                        <input type="text" class="form-control" name="precio"value="<?php echo $row['precio'] ?>" placeholder="Precio"><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit"  value="ok" class="btn btn-primary">Guardar cambios</button>
                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
          <?php  }
            ?>
        </tbody>

    </table>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
