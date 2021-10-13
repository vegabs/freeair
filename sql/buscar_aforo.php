<?php

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $server = "localhost";
    $db = "soetr";
    $user = "root";
    $password = "";
    $conexion = mysqli_connect($server, $user, $password, $db);

    $campus = $_POST["campusBuscar"];

    // consultar si el usuario esta en la base de datos
    $consulta = "SELECT campus, aula, aforo_covid
        FROM cursos WHERE campus = '$campus' GROUP BY aula";
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
                <th scope="col">Campus</th>
                <th scope="col">Aula</th>
                <th scope="col">Aforo COVID</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>';

        while ($columna = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $columna["campus"] . "</td>";
            echo "<td>" . $columna["aula"] . "</td>";
            echo "<td>" . $columna["aforo_covid"] . "</td>";
            echo '<td><button type="submit" class="btn btn-link btn-sm p-0" id="btnEditarAlumno">Modificar</button></td>';
            echo "</tr>";
        }

        echo '</tbody></table>';
    }
}

?>