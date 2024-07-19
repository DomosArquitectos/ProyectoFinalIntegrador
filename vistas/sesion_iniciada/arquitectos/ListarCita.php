<!-- Para evitar entrar sin estar logeado-->
<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Debes iniciar sesion");
                window.location = "../../index.php";
            </script>
        ';
        session_destroy();
        die();
    }

?>
<!--/Para evitar entrar sin estar logeado-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../css/index_iniciada.css" />
    <script src="https://kit.fontawesome.com/b8cbc6c01a.js" crossorigin="anonymous"></script>

    <style>
    .highlight-row {
        background-color: #2BBE3F !important;
        /* Cambiar al color que desees */

        
    }
    </style>
    <style>
    .alert {
        margin: 20px;
    }
</style>
    <title>Bienvenido Usuario</title>
    <
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
   
</head>

<body>
    <!-- NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="h-5" src="../../../imagenes/logodomos.jpg" width="140px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../../../php/cerrar_sesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ListarCita.php">Citas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NavBar-->
    
</div>
    <?php
include('conexion_be.php'); // Asegúrate de que esta ruta es correcta y el archivo existe

$sql = "SELECT * FROM reservacitas ORDER BY idCitas";
$resultado = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($resultado);

if ($resultado) {
    
    echo "<br>";
    echo "<h2 align='center'>Listado de Citas Reservadas</h2>";
    echo "<div class='container mt-3'>";
    echo "<table class='table table-hover' align='center'>";
    echo "<thead>
            <tr>    
                <th>N°</th>
                <th>Nombres y Apellidos</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Servicio</th>
                <th>Fecha</th>
                <th>Hora de cita</th> <!-- Nueva columna -->
                <th>Horas</th> <!-- Nueva columna -->
                <th>Descripción</th>
            </tr>
          </thead>";
    echo "<tbody id='citas-table-body'>";
    
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>
                <td>{$fila['idCitas']}</td>
                <td>{$fila['nombres']} {$fila['apellidos']}</td>
                <td>{$fila['telefono']}</td>
                <td>{$fila['direccion']}</td>
                <td>{$fila['servicio']}</td>
                <td>{$fila['fecha_cita']}</td>
                <td>{$fila['hora_cita']}</td> <!-- Nueva columna -->
                <td>{$fila['duracion']}</td> <!-- Nueva columna -->
                <td>{$fila['descripcion']}</td>
              </tr>";
    }
    
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "<div class='alert alert-warning' role='alert'>No hay datos para mostrar...</div>";
}
?>

<div class="d-flex justify-content-center mb-2">
    <a href="../../fpdf/PruebaV.php" target="_blank" class="btn btn-outline-danger mx-2"><i class="fas fa-file-pdf"></i>Generar PDF</a>
    <a href="./listacitasexcel.php" target="_blank" class="btn btn-outline-success mx-2"><i class="fas fa-file-excel"></i>Generar Excel</a>
    <a href="#" data-toggle="modal" data-target="#emailModal" class="btn btn-outline-primary mx-2">
    <i class="fa-regular fa-envelope"></i> Enviar Email
</a>
</div>
<!-- Ventana Modal -->
<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="emailModalLabel">Enviar Listado de Citas por Email</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="./listacitasemail.php" method="post">
                            <div class="form-group">
                                <label for="email_to">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email_to" name="email_to" placeholder="Ingrese su correo electrónico" required>
                            </div>
                            <button type="submit" class="btn btn-outline-success">
                                <i class="fas fa-file-excel"></i> Enviar Excel
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Ventana Modal -->
    




    <audio id="notification-sound" src="Wood.mp3" preload="auto"></audio>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        var previousCount = <?php echo $num_rows; ?>;

        function checkNewRecords() {
            $.ajax({
                url: 'check_new_records.php',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    var currentCount = response.count;
                    if (currentCount > previousCount) {
                        previousCount = currentCount;
                        loadTableDataAndHighlightRow(); // Cargar datos y resaltar última fila
                        $('#notification-sound')[0].play().catch(function(error) {
                            console.log("Error al reproducir el sonido:", error);
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud AJAX:', status, error);
                }
            });
        }

        // Función para cargar los datos y resaltar la última fila
        function loadTableDataAndHighlightRow() {
            $.ajax({
                url: 'load_table_data.php',
                method: 'GET',
                success: function(html) {
                    $('#citas-table-body').html(html); // Actualizar el cuerpo de la tabla
                    setTimeout(highlightLastRow,
                        100); // Añadir un pequeño retraso antes de resaltar la fila
                },
                error: function(xhr, status, error) {
                    console.error('Error al cargar datos de la tabla:', status, error);
                }
            });
        }

        // Función para resaltar la última fila
        function highlightLastRow() {
            $('#citas-table-body tr').removeClass('highlight-row'); // Eliminar resaltado previo
            $('#citas-table-body tr:first').addClass('highlight-row'); // Resaltar última fila agregada
        }

        // Verificar nuevos registros cada 2 segundos
        setInterval(checkNewRecords, 2000);
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>