<nav class="navbar navbar-expand-lg navbar-light" aria-label="Eighth navbar example">
    <div class="container">
        <a class="navbar-brand" href="#"><img class="bi me-2" width="40" height="32" src="../../img/fan.svg">
            </img></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Ventilación</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" id="navVentilacion" href="ventilacion.php">Ver ventilación</a></li>
                        <li><a class="dropdown-item" id="navAforoCovid" href="aforocovid.php">Ver aforo COVID</a></li>
                        <li>
                            <a class="dropdown-item" id="navCasosFiebre" href="casosfiebre.php">Ver casos de fiebre</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown07">
                        <li><a class="dropdown-item" href="docentes.php">Gestion de docentes</a></li>
                        <li><a class="dropdown-item" id="navCrearSeccion" href="secciones.php">Gestión de secciones</a></li>
                        <li>
                            <a class="dropdown-item" id="navMatricula" href="matricula.php">Matricula</a>
                        </li>
                        <li>
                            <a class="dropdown-item" id="navAlumnos" href="alumnos.php">Gestion de alumnos</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="asistencia.php">Ver asistencia</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="programar.php">Programar sesiones</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contra.php">Cambiar contraseña</a>
                </li>

            </ul>
            <div class="text-end">
                <a href="cerrarsesion.php" class="btn btn-primary">Cerrar sesión</a>
            </div>
        </div>
    </div>
</nav>