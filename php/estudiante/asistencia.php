<?php
session_start();

$server = "localhost";
    $db = "soetr";
    $user = "root";
    $password = "";
    $conexion = mysqli_connect($server, $user, $password, $db);

    $codigo = $_SESSION['datos_usuario']['codigo'];
    $options = "";

    $consulta = "SELECT cursos.codigo_curso, cursos.nombre_curso FROM cursos
    INNER JOIN matricula ON cursos.id = matricula.id
    WHERE codigo_alumno = '$codigo'";
    $resultado = mysqli_query($conexion, $consulta) or die("No encontrado");

    // cerrar la conexion
    mysqli_close($conexion);

    if (empty($resultado)) {
        $options =  '';
    } else {
        while ($columna = mysqli_fetch_array($resultado)) {
            $options = $options . "<option value=". $columna['codigo_curso']. ">" . $columna['nombre_curso'] . "</option>";
        }
    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>Asistencia</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container py-4">
        <div class="container py-4" id="verAforo">
            <h2 class="mb-4 display-3">Mi asistencia</h2>
            <form class="row row-cols-lg-auto g-3 align-items-center" id="formAsistencia" method="post">
                <div class="col-12">
                    <label class="visually-hidden" for="CursoBuscar">Curso</label>
                    <div class="input-group">
                        <div class="input-group-text">📚 Curso</div>
                        <select id="CursoBuscar" name="CursoBuscar" class="form-select" required>
                            <option selected>Selecciona...</option>
                            <?php echo $options; ?>;
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="consultar">Consultar</button>
                </div>
            </form>
            <div id="contentVerAsistencia"></div>
        </div>
    </main>

    <?php include 'script.php'; ?>
</body>

</html>