<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: ../vistas/sesion_iniciada/index_iniciada.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <style>
    body {
        background: silver;
    }
    </style>
    <title>Login</title>
</head>

<body>
    <!-- Login -->
    <div class="container w-25 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg-white p-5 rounded-end">
                <h2 class="fw-bold text-center pt-5 py-5">Bienvenido</h2>
                <form action="../../php/login_usuario_be.php" method="POST">
                    <div class="mb-4">
                        <div class="mb-4">
                            <label for="text" class="form-label">Correo Electronico</label>
                            <input type="text" class="form-control" name="correo" />
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contraseña" />
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Iniciar Sesión
                            </button>
                        </div>

                        <div class="my-3">
                            <span>No tienes cuenta?
                                <a href="registro.php">Registrarse</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Login -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>