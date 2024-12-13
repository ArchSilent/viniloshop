<?php
include('conexion.php');

$sql = "SELECT * FROM bitacora";
$result = $conn->query($sql);

echo "<h2>Registro de Bitácora</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Fecha y Hora</th>
            <th>Acción</th>
        </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['usuario']}</td>
            <td>{$row['fecha_hora']}</td>
            <td>{$row['accion']}</td>
          </tr>";
}
echo "</table>";
?>
