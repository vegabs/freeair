<?php
    
    header("Content-Type: text/html;charset=utf-8");
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $server = "localhost";
        $db = "soetr";
        $user = "root";
        $password = "";
        $conexion = mysqli_connect($server, $user, $password, $db);

        $codigo = $_POST["codigoCrear"];
        $nombre = $_POST["nombreCrear"];
        $apellidop = $_POST["apellidopCrear"];
        $apellidom = $_POST["apellidomCrear"];
        $carrera = $_POST["carreraCrear"];
        $campus = $_POST["campusCrear"];
        $sexo = $_POST["sexoCrear"];
        $acceso = "ESTUDIANTE";
        
        mysqli_set_charset($conexion, "utf8");

        // /* cambiar el conjunto de caracteres a utf8 */
        // if (!mysqli_set_charset($conexion, "utf8")) {
        //     printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
        //     exit();
        // } else {
        //     printf("Conjunto de caracteres actual: %s\n", mysqli_character_set_name($conexion));
        // }

        // consultar si el usuario esta en la base de datos
        $insertar = "insert into personal (codigo, nombre, apellidop, apellidom, carrera,campus, sexo, acceso) VALUES ('$codigo', '$nombre', '$apellidop', '$apellidom', '$carrera', '$campus', '$sexo', '$acceso')";
        $query = mysqli_query($conexion, $insertar);

        if (!$query) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ya existe un(a) estudiante con ese código 🔔</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }else{
            echo '<div class="alert alert-primary" role="alert">
            Alumno creado con exito ✨
            </div>';
        }
        
        // cerrar la conexion
        mysqli_close($conexion);

    }

?>
