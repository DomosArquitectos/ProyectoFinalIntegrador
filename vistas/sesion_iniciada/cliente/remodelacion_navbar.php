<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../../css/remodelacion_navbar.css" />
    <title>Remodelacion de interiores</title>
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index_cliente.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="diseño_planos_navbar.php">Diseño de
                                    planos</a></li>
                            <li>
                                <a class="dropdown-item" href="remodelacion_navbar.php">Remodelacion de interiores</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="diseño_edificios_navbar.php">Diseño
                                    de edificios multifamiliares</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Estudio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="nosotros_navbar.php">Nosotros</a>
                            </li>
                            <li><a class="dropdown-item" href="nuestro_equipo_navbar.php">Nuestro
                                    equipo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos_navbar.php">Proyectos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="miscitas_navbar.php">Mis citas</a>
                            </li>
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
    <div class="container">
        <div class="nosotros">
            <h1>Remodelación de interiores</h1>
        </div>
        <div class="intro">
            <img src="../../../imagenes/remodelacion.png" class="img" alt="Domos Arquitectos" />
            <div class="intro-text">
                <p>
                <p>✔Diseño, construcción y remodelacion en Drywall o superboard.</p>
                <p>✔Asesoría en diseño e implementación de mobiliario y/o equipamiento en melamina.</p>
                <p>✔Pintura en general de ambientes, tratamientos especiales en acero.</p>
                <p>✔Fabricación y montaje de estructuras metálicas para ambientes.</p>
                <p>✔Suministro e instalación de mamparas y puertas en cristal templado.</p>
                </p>
            </div>
        </div>
        <!--footer-->
        <div class="footer">
            <div>
                <h3>DOMOS ARQUITECTOS</h3>
                <p>
                    Somos un estudio dedicado a la elaboración de proyectos integrales
                    arquitectónicos.
                </p>
                <div class="social-icons">
                    <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook.png"
                            alt="Facebook" /></a>
                    <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png"
                            alt="Instagram" /></a>
                    <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png"
                            alt="LinkedIn" /></a>
                </div>
            </div>
            <div>
                <h3>DIRECCION</h3>
                <p>✔OFICINA</p>
                <address>
                    Av. San Martín N°170<br />
                    Ofi. 201 - 2do Piso, Ica
                </address>
            </div>
            <div>
                <h3>CONTACTENOS</h3>
                <p>✔LLÁMENOS</p>
                <p>938 329 392</p>
                <p>✔EMAIL</p>
                <p>domosarquitectura@hotmail.com</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>