<?php
// RegistrarCita.php
include 'conexion_be.php'; // Conexión a la base de datos

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$servicio = $_POST['servicio'];
$fecha_cita = $_POST['fecha_cita'];
$hora_cita = $_POST['hora_cita'];
$duracion = $_POST['duracion'];
$descripcion = $_POST['descripcion'];

// Verificar si ya existe una cita en la misma fecha y hora
$query_check = "SELECT * FROM reservacitas WHERE fecha_cita = ? AND hora_cita = ?";
$stmt_check = $conn->prepare($query_check);
$stmt_check->bind_param('ss', $fecha_cita, $hora_cita);
$stmt_check->execute();
$result_check = $stmt_check->get_result();

if ($result_check->num_rows > 0) {
    // Redirige a resultado_registro.php con un mensaje de error si la cita ya existe
    header('Location: resultado_registro.php?error=cita_existente');
    exit();
}

// Inserción de datos en la tabla reservacitas
$query_insert = "INSERT INTO reservacitas (nombres, apellidos, telefono, direccion, servicio, fecha_cita, hora_cita, duracion, descripcion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt_insert = $conn->prepare($query_insert);
$stmt_insert->bind_param('sssssssss', $nombres, $apellidos, $telefono, $direccion, $servicio, $fecha_cita, $hora_cita, $duracion, $descripcion);

if ($stmt_insert->execute()) {
    // Redirige a resultado_registro.php después de una inserción exitosa
    header('Location: resultado_registro.php?error=registro_exitoso');
    exit(); // Asegúrate de llamar a exit() después de header()
} else {
    echo 'Error al registrar la cita: ' . $stmt_insert->error;
}

$stmt_check->close();
$stmt_insert->close();
$conn->close();
?>