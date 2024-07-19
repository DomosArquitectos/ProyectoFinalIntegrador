<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../../css/citas_navbar.css" />
    <title>Formulario de Cita - Empresa de Arquitectos</title>
</head>

<body>
    <!-- NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="h-5" src="../../imagenes/logodomos.jpg" width="140px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/diseño_planos_navbar.php">Diseño de planos</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/remodelacion_navbar.php">Remodelacion de
                                    interiores</a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/diseño_edificios_navbar.php">Diseño de edificios
                                    multifamiliares</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Estudio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/nosotros_navbar.php">Nosotros</a></li>
                            <li><a class="dropdown-item"
                                    href="../../vistas/sesion_cerrada/nuestro_equipo_navbar.php">Nuestro equipo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../vistas/sesion_cerrada/proyectos_navbar.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../vistas/sesion_cerrada/citas_navbar.php">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../vistas/login_register/login.php">Iniciar sesion</a>
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
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            echo '<div class="alert alert-danger text-center" role="alert">Usted no está registrado</div>';
                        }
                        ?>
                        <form id="reservationForm" action="" method="post" class="needs-validation" novalidate>
                            <div class="row">
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
                                        <input type="text" name="apellidos" id="apellidos" class="form-control"
                                            required>
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
                                        <input type="text" name="direccion" id="direccion" class="form-control"
                                            required>
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
                                        <input type="date" id="fecha_cita" name="fecha_cita" class="form-control"
                                            required>
                                        <div class="invalid-feedback">
                                            Incompleto...
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="hora_cita" class="form-label">Hora de la cita:</label>
                                        <input type="time" id="hora_cita" name="hora_cita" class="form-control"
                                            required>
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
                                        <textarea class="form-control" name="descripcion" id="descripcion"
                                            placeholder="" rows="4" required></textarea>
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
    })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+