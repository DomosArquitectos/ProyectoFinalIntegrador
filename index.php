<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/index.css" />
    <title>DomosArquitectos</title>
</head>

<body>
    <!-- NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="h-5" src="imagenes/logodomos.jpg" width="140px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="vistas/sesion_cerrada/diseño_planos_navbar.php">Diseño de
                                    planos</a></li>
                            <li>
                                <a class="dropdown-item"
                                    href="vistas/sesion_cerrada/remodelacion_navbar.php">Remodelacion de interiores</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="vistas/sesion_cerrada/diseño_edificios_navbar.php">Diseño
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
                            <li><a class="dropdown-item" href="vistas/sesion_cerrada/nosotros_navbar.php">Nosotros</a>
                            </li>
                            <li><a class="dropdown-item" href="vistas/sesion_cerrada/nuestro_equipo_navbar.php">Nuestro
                                    equipo</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vistas/sesion_cerrada/proyectos_navbar.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vistas/sesion_cerrada/citas_navbar.php">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vistas/login_register/login.php">Iniciar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NavBar-->
    <div class="fondo-index">
        <div class=fondo-contenido>
            <h1>DISEÑA TUS SUEÑOS</h1>
            <p>Construimos la casa, tú la conviertes en un hogar</p>
        </div>
    </div>
    <div class="content-1">
        <p>Somos una empresa dedicado a la elaboración de proyectos integrales arquitectónicos.</p>
    </div>

    <div class="servicios">
        <div class="servicios-item">
            <img src="imagenes/diseño_planos.png" alt="Diseño de planos">
            <h3>DISEÑO DE PLANOS</h3>
            <p>Creamos planos personalizados para tu proyecto. Nuestro equipo experto transforma tus ideas en
                realidad arquitectónica.</p>
        </div>
        <div class="servicios-item">
            <img src="imagenes/remodelacion.png" alt="Remodelación de interiores">
            <h3>REMODELACION DE INTERIORES</h3>
            <p>Dale vida a tu espacio con nuestra remodelación de interiores. Desde pequeños cambios hasta
                renovaciones completas, estamos aquí para hacer realidad tu visión.</p>
        </div>
        <div class="servicios-item">
            <img src="imagenes/diseño_edificos.png" alt="Diseño de edificios multifamiliares">
            <h3>DISEÑO DE EDIFICIOS MULTIFAMILIARES</h3>
            <p>Diseño de edificios que respondan apropiadamente al contexto urbano y a las regulaciones municipales.
                Diseño responsable del exterior y en las viviendas.</p>
        </div>
    </div>
    <br>
    <!--footer-->
    <div class="footer">
        <div>
            <h3>DOMOS ARQUITECTOS</h3>
            <p>
                Somos un estudio dedicado a la elaboración de proyectos integrales
                arquitectónicos.
            </p>
            <div class="social-icons">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook.png" alt="Facebook" /></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram-new.png"
                        alt="Instagram" /></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/linkedin.png" alt="LinkedIn" /></a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>