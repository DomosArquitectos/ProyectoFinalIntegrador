<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$id_cargo = $_POST['id_cargo'];

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo '
        <script>
            alert("El campo de correo debe contener un \'@\'.");
            window.location="../vistas/login_register/login.php";
        </script>
    ';
    exit();
}

if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $contraseña)) {
    echo '
        <script>
            alert("La contraseña debe tener al menos una letra y un número, y un mínimo de 8 caracteres.");
            window.location="../vistas/login_register/login.php";
        </script>
    ';
    exit();
}

//Contraseña encriptada
$contraseña = hash('sha512', $contraseña);

$query = "INSERT INTO usuarios(nombre,apellido,correo,contraseña,id_cargo) 
         VALUES('$nombre','$apellido','$correo','$contraseña','1')";

//Verificar que el correo no se repita en la BD
$vereficar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");

if (mysqli_num_rows($vereficar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado, inténtalo con otro correo.");
            window.location="../vistas/login_register/login.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location= "../vistas/login_register/login.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Inténtalo de nuevo, usuario no registrado");
            window.location= "../vistas/login_register/login.php";
        </script>
    ';
}

mysqli_close($conexion);
?>