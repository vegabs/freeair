<?php
    
    header("Content-Type: text/html;charset=utf-8");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $server = "localhost";
        $db = "soetr";
        $user = "root";
        $password = "";
        $conexion = mysqli_connect($server, $user, $password, $db);

        $codigo= $_POST["codigoCurso"];
        $nombre = $_POST["nombreCurso"];
        $seccion = $_POST["seccionCurso"];
        $campus = $_POST["campusCurso"];
        $aula = $_POST["aulaCurso"];
        $dia = $_POST["diaCurso"];
        $hora_inicio = $_POST["horaInicioCurso"];
        $hora_fin = $_POST["horaFinCurso"];
        $tipo = $_POST["tipoCurso"];
        $ciclo = $_POST["cicloCurso"];
        $aforo = $_POST["aforoCurso"];
        
        mysqli_set_charset($conexion, "utf8");

        // consultar si el usuario esta en la base de datos
        $insertar = "INSERT INTO cursos(codigo_curso,nombre_curso,seccion,aula,dia,hora_inicio,hora_fin,tipo_sesion,ciclo,aforo_covid,campus) VALUES ('$codigo','$nombre','$seccion','$aula','$dia','$hora_inicio','$hora_fin','$tipo','$ciclo','$aforo','$campus')";
        $query = mysqli_query($conexion, $insertar);

        if (!$query) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ya existe una sección con ese código 🔔</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-primary" role="alert">
            Sección creada con exito ✨
            </div>';
        }
        
        // cerrar la conexion
        mysqli_close($conexion);

    }

?>
