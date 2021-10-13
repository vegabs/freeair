<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $server = "localhost";
        $db = "soetr";
        $user = "root";
        $password = "";
        $conexion = mysqli_connect($server, $user, $password, $db);

        $codigo_usuario = $_POST["codigoBuscar"];

        // consultar si el usuario esta en la base de datos
        $consulta = "select * from personal where codigo = '$codigo_usuario' and acceso = 'ESTUDIANTE'";
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
            $contentVerAlumnos = '
            <table class="mt-4 table">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Campus</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">' . $registro["codigo"] . '</th>
                    <td>' . $registro["nombre"] . '</td>
                    <td>' . $registro["apellidop"] . '</td>
                    <td>' . $registro["apellidom"] . '</td>
                    <td>' . $registro["carrera"] . '</td>
                    <td>' . $registro["campus"] . '</td>
                    <td>' . $registro["sexo"] . '</td>
                    <td><button type="submit" class="btn btn-link btn-sm p-0" id="btnEditarAlumno">Editar</button></td>
                </tr>
            </tbody>
        </table> 
        ';

        echo $contentVerAlumnos;
        }
        
    }
?>
