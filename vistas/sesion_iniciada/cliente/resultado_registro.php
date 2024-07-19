<?php
// resultado_registro.php

$error = isset($_GET['error']) ? $_GET['error'] : '';
$mensaje = '';

if ($error === 'cita_existente') {
    $mensaje = 'Ya existe una cita registrada para esta fecha y hora.';
} elseif ($error === 'registro_exitoso') {
    $mensaje = 'La cita ha sido registrada exitosamente.';
} else {
    $mensaje = 'Ha ocurrido un error inesperado.';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
    <script>
    function redirigir() {
        window.location.href = 'citas_navbar.php';
    }
    </script>
</head>

<body onload="alert('<?php echo $mensaje; ?>'); redirigir();">
</body>

</html>