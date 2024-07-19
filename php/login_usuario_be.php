<?php

session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

$validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo='$correo' and contraseña='$contraseña'");

// si encuentra dato valido redirige
if(mysqli_num_rows($validar_login) > 0){
    $usuario = mysqli_fetch_assoc($validar_login);
    $_SESSION['usuario'] = $correo;

    // Verifica el id_cargo del usuario
    if ($usuario['id_cargo'] == '1') {
        header("location: ../vistas/sesion_iniciada/cliente/index_cliente.php");
    } else if ($usuario['id_cargo'] == '2') {
        header("location: ../vistas/sesion_iniciada/arquitectos/ListarCita.php");
    }
    exit;
    
} else {
    echo '
        <script>
            alert("Usuario no existe");
            window.location = "../vistas/login_register/login.php";
        </script>
    ';
    exit;
}

?>