<?php
include('conexion_be.php');

$sql = "SELECT COUNT(*) as count FROM reservacitas";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    $count = $fila['count'];
    echo json_encode(['count' => $count]);
} else {
    echo json_encode(['count' => 0]); // Si hay un error, devolver 0 registros
}

mysqli_close($conn);
?>
