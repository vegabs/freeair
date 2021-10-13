<?php

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

session_start();
$codigo = $_SESSION['datos_usuario']['codigo'];
echo $_POST["id_sesion"];
console_log("howlaaaa");

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     $server = "localhost";
//     $db = "soetr";
//     $user = "root";
//     $password = "";
//     $conexion = mysqli_connect($server, $user, $password, $db);

//     $id_sesion = $_POST["id_sesion"];

//     // consultar si el usuario esta en la base de datos
//     $consulta = "SELECT * FROM ventilacion
//                     where ventilacion.id_programacion = 1";
//     $resultado = mysqli_query($conexion, $consulta) or die("No encontrado");

//     // cerrar la conexion
//     mysqli_close($conexion);

//     echo "hola";
//     console_log("holaaaa");

//     if (empty($resultado)) {
//         echo '<div class="alert alert-primary mt-4" role="alert">
//             No se encontró lo que estabas buscando 😪
//           </div>';
//     } else {
//         echo $resultado["co2aula"];
//     }
// }

?>
