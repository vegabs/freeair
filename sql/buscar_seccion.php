<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $server = "localhost";
        $db = "soetr";
        $user = "root";
        $password = "";
        $conexion = mysqli_connect($server, $user, $password, $db);

        $seccion = $_POST["seccionBuscar"];

        // consultar si la seccion se encuentra en la base de datos
        $consulta = "select * from cursos where seccion = '$seccion'";
        $resultado = mysqli_query($conexion, $consulta) or die("Usuario no encontrado");
        $registro = mysqli_fetch_array($resultado);
        
        // cerrar la conexion
        mysqli_close($conexion);

        if(empty($registro)){
            echo '<div class="alert alert-primary mt-4" role="alert">
            No se encontró lo que estabas buscando 😪
          </div>';
        }
        
        else{
            $contentBusquedaSeccion = '
            <table class="mt-4 table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Sección</th>
                    <th scope="col">Campus</th>
                    <th scope="col">Día</th>
                    <th scope="col">Hora inicio</th>
                    <th scope="col">Hora fin</th>
                    <th scope="col">Tipo de sesión</th>
                    <th scope="col">Ciclo</th>
                    <th scope="col">Aforo COVID</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">' . $registro["codigo_curso"] . '</th>
                    <td>' . $registro["nombre_curso"] . '</td>
                    <td>' . $registro["seccion"] . '</td>
                    <td>' . $registro["campus"] . '</td>
                    <td>' . $registro["dia"] . '</td>
                    <td>' . $registro["hora_inicio"] . '</td>
                    <td>' . $registro["hora_fin"] . '</td>
                    <td>' . $registro["tipo_sesion"] . '</td>
                    <td>' . $registro["ciclo"] . '</td>
                    <td>' . $registro["aforo_covid"] . '</td>
                    <td><button type="submit" class="btn btn-link btn-sm p-0" id="btnEditarAlumno">Editar</button></td>
                </tr>
            </tbody>
        </table> 
        ';

        echo $contentBusquedaSeccion;
        }
        
    }
?>
