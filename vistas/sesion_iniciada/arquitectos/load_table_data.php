<?php
include('conexion_be.php');

$sql = "SELECT * FROM reservacitas ORDER BY idCitas";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>
                <td>{$fila['idCitas']}</td>
                <td>{$fila['nombres']} {$fila['apellidos']}</td>
                <td>{$fila['telefono']}</td>
                <td>{$fila['direccion']}</td>
                <td>{$fila['servicio']}</td>
                <td>{$fila['fecha_cita']}</td>
                <td>{$fila['descripcion']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hay datos para mostrar...</td></tr>";
}

mysqli_close($conn);
?>