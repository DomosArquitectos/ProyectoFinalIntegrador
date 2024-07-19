<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Cita - Empresa de Arquitectos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>

<body>
    <!-- NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Mostrar mensaje de error, si existe -->
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 'cita_existente') {
            echo '<div class="alert alert-danger" role="alert">Ya existe una cita registrada para esta fecha y hora.</div>';
        }
        ?>
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index_cliente.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="diseño_planos_navbar.php">Diseño de planos</a></li>
                            <li><a class="dropdown-item" href="remodelacion_navbar.php">Remodelacion de interiores</a>
                            </li>
                            <li><a class="dropdown-item" href="diseño_edificios_navbar.php">Diseño de edificios
                                    multifamiliares</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Estudio</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="nosotros_navbar.php">Nosotros</a></li>
                            <li><a class="dropdown-item" href="nuestro_equipo_navbar.php">Nuestro equipo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos_navbar.php">Proyectos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="miscitas_navbar.php">Mis citas</a></li>
                            <li><a class="dropdown-item" href="../../../php/cerrar_sesion.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="citas_navbar.php">Citas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NavBar-->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Registro de Reserva de Citas</h3>
                    </div>
                    <div class="card-body">
                        <form id="reservationForm" action="RegistrarCita.php" method="post" class="needs-validation"
                            novalidate>
                            <div class="row">
                            <label for="dni" class="form-label">DNI:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="dni" id="dni" maxlength="8" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                <button type="button" id="boton" class="btn btn-success">Consultar</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="nombres" class="form-label">Nombres:</label>
                                    <input type="text" name="nombres" id="nombres" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="apellidos" class="form-label">Apellidos:</label>
                                    <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="telefono" class="form-label">Teléfono:</label>
                                    <input type="tel" name="telefono" id="telefono" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="direccion" class="form-label">Dirección:</label>
                                    <input type="text" name="direccion" id="direccion" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="servicio" class="form-label">Tipo de Servicio:</label>
                                    <select class="form-select" id="servicio" name="servicio" class="form-control"
                                        required>
                                        <option selected disabled value="">Seleccione...</option>
                                        <option>Tramite Municipalidad</option>
                                        <option>Firma de Planos</option>
                                        <option>Diseño de Planos</option>
                                        <option>Remodelaciones</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="fecha_cita" class="form-label">Fecha de la cita:</label>
                                    <input type="date" id="fecha_cita" name="fecha_cita" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="hora_cita" class="form-label">Hora de la cita:</label>
                                    <input type="time" id="hora_cita" name="hora_cita" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="duracion" class="form-label">Duración (máximo 2 horas):</label>
                                    <input type="number" id="duracion" name="duracion" class="form-control" min="1"
                                        max="2" required>
                                    <div class="invalid-feedback">
                                        Incompleto...
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <label for="descripcion" class="form-label">Descripción de la Cita:</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" placeholder=""
                                        rows="4" required></textarea>
                                    <div class="invalid-feedback">
                                        Falta la Descripción.
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Registrar Solicitud
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="dni.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    (function() {
        'use strict';

        const form = document.querySelector('#reservationForm');
        const today = new Date().toISOString().split('T')[0];
        const fechaCita = document.getElementById('fecha_cita');
        fechaCita.setAttribute('min', today);

        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);

        fechaCita.addEventListener('input', function() {
            if (fechaCita.value < today) {
                fechaCita.setCustomValidity('La fecha no puede ser anterior a la fecha actual.');
            } else {
                fechaCita.setCustomValidity('');
            }
        });

        const horaCita = document.getElementById('hora_cita');
        const duracion = document.getElementById('duracion');

        form.addEventListener('submit', function(event) {
            const selectedDate = fechaCita.value;
            const selectedTime = horaCita.value;
            const selectedDuration = parseInt(duracion.value);

            if (selectedDuration > 2) {
                duracion.setCustomValidity('La duración no puede ser mayor a 2 horas.');
                event.preventDefault();
                event.stopPropagation();
            } else {
                duracion.setCustomValidity('');
            }

            // Aquí debería ir la llamada AJAX para verificar la disponibilidad de la hora en el servidor.
            $.ajax({
                url: 'verificar_disponibilidad.php',
                type: 'POST',
                data: {
                    fecha: selectedDate,
                    hora: selectedTime
                },
                success: function(response) {
                    if (response.disponible === false) {
                        horaCita.setCustomValidity('La hora seleccionada ya está reservada.');
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        horaCita.setCustomValidity('');
                    }
                },
                error: function() {
                    alert(
                        'Error al verificar la disponibilidad. Por favor, inténtelo de nuevo.'
                    );
                    event.preventDefault();
                    event.stopPropagation();
                }
            });
        });

    })();
    </script>
    <script>
    (function() {
        'use strict';

        const form = document.querySelector('#reservationForm');
        const today = new Date().toISOString().split('T')[0];
        const fechaCita = document.getElementById('fecha_cita');
        const horaCita = document.getElementById('hora_cita');
        const duracion = document.getElementById('duracion');

        fechaCita.setAttribute('min', today);

        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            form.classList.add('was-validated');
        }, false);

        fechaCita.addEventListener('input', function() {
            if (fechaCita.value < today) {
                fechaCita.setCustomValidity('La fecha no puede ser anterior a la fecha actual.');
            } else {
                fechaCita.setCustomValidity('');
            }
        });

        form.addEventListener('submit', function(event) {
            const selectedDate = fechaCita.value;
            const selectedTime = horaCita.value;
            const selectedDuration = parseInt(duracion.value);

            if (selectedDuration > 2) {
                duracion.setCustomValidity('La duración no puede ser mayor a 2 horas.');
                event.preventDefault();
                event.stopPropagation();
            } else {
                duracion.setCustomValidity('');
            }

            // Verificar disponibilidad
            $.ajax({
                url: 'verificar_disponibilidad.php',
                type: 'POST',
                data: {
                    fecha: selectedDate,
                    hora: selectedTime
                },
                success: function(response) {
                    if (response.disponible === false) {
                        horaCita.setCustomValidity('La hora seleccionada ya está reservada.');
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        horaCita.setCustomValidity('');
                    }
                },
                error: function() {
                    alert(
                        'Error al verificar la disponibilidad. Por favor, inténtelo de nuevo.'
                    );
                    event.preventDefault();
                    event.stopPropagation();
                }
            });
        });

    })();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>