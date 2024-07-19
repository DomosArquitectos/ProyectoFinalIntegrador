<?php
// verificar_disponibilidad.php
include 'conexion_be.php'; // Conexión a la base de datos

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Consulta para verificar la disponibilidad
$query = "SELECT * FROM reservacitas WHERE fecha_cita = '$fecha' AND hora_cita = '$hora'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo json_encode(['disponible' => false]);
} else {
    echo json_encode(['disponible' => true]);
}
?>