<?php

date_default_timezone_set("America/Lima");
session_start();

// datos enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // servidor
    $server = "localhost";
    $db = "soetr";
    $user = "root";
    $password = "";
    $conexion = mysqli_connect($server, $user, $password, $db);

    // datos obtenidos del form
    $codigo_usuario = $_POST["email"];
    $clave_usuario = $_POST["password"];

    // consultar si el usuario esta en la base de datos
    $consulta = "SELECT *
                from personal 
                inner join usuarios on personal.codigo=usuarios.codigo 
                where usuarios.codigo = '$codigo_usuario' and usuarios.clave = aes_encrypt('$clave_usuario', 'upc')
                limit 1";
    $resultado = mysqli_query($conexion, $consulta) or die("Usuario no encontrado");

    // mostrando los resultados
    $registro = mysqli_fetch_array($resultado);
    $usuario_db = $registro['codigo'];
    $acceso_db = $registro['acceso'];

    // cerrar la conexion
    mysqli_close($conexion);

    // enviar las variables
    $_SESSION['datos_usuario'] = $registro;

    switch ($acceso_db) {
        case "ADMIN":
            header("Location: admin/admin.php", true, 301);
            exit();
            break;
        case "ESTUDIANTE":
            header("Location: estudiante/estudiante.php", true, 301);
            exit();
            break;
        case "DOCENTE":
            header("Location: docente/docente.php", true, 301);
            exit();
            break;
        default:
            break;
    }
}
else{
    header("Location: ../index.html");
    return;
}
?>
