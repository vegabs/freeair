<?php

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

session_start();
$codigo = $_SESSION['datos_usuario']['codigo'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $server = "localhost";
    $db = "soetr";
    $user = "root";
    $password = "";
    $conexion = mysqli_connect($server, $user, $password, $db);

    $curso = $_POST["CursoBuscar"];

    // consultar si el usuario esta en la base de datos
    $consulta = "SELECT programacion.fecha, 
                        time(asistencia.hora_entrada) as hora_entrada,
                        time(asistencia.hora_salida) as hora_salida,
                        asistencia.estado,
                        asistencia.temperatura
                        FROM asistencia
                        JOIN programacion
                        ON asistencia.id_programacion = programacion.id_sesion
                        JOIN cursos
                        ON programacion.id_curso = cursos.id
                        WHERE asistencia.codigo_asistente = '$codigo' AND
                        cursos.codigo_curso = '$curso'";
    $resultado = mysqli_query($conexion, $consulta) or die("No encontrado");

    // cerrar la conexion
    mysqli_close($conexion);

    if (empty($resultado)) {
        echo '<div class="alert alert-primary mt-4" role="alert">
            No se encontró lo que estabas buscando 😪
          </div>';
    } else {
        echo '
            <table class="mt-4 table">
            <thead>
                <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Hora de entrada</th>
                <th scope="col">Hora de salida</th>
                <th scope="col">Asistencia</th>
                <th scope="col">Temperatura</th>
                <th scope="col">Ventilación</th>
                </tr>
            </thead>
            <tbody>';

        while ($columna = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $columna["fecha"] . "</td>";
            echo "<td>" . $columna["hora_entrada"] . "</td>";
            echo "<td>" . $columna["hora_salida"] . "</td>";
            echo "<td>" . $columna["estado"] . "</td>";
            echo "<td>" . $columna["temperatura"] . "</td>";
            echo "<td>Ver</td>";
            echo "</tr>";
        }

        echo '</tbody></table>';
    }
}

?>