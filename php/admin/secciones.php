<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>Secciones</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container py-4">
        <div class="container py-4" id="verSecciones">
            <h2 class="mb-4 display-3">Gestión de secciones</h2>
            <form class="row row-cols-lg-auto g-3 align-items-center" id="formBuscarSecciones" method="post">
                <div class="col-12">
                    <label class="visually-hidden" for="seccionBuscar">Sección</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" name="seccionBuscar" id="seccionBuscar" placeholder="Sección">
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="buscarSeccion">Buscar</button>
                </div>

                <div class="col-12 text-right">
                    <a id="btnCrearSeccion" class="btn btn-outline-primary">Crear sección</a>
                </div>
            </form>
            <div id="contentBusquedaSeccion"></div>
        </div>

        <div class="container py-4" id="verCrearSeccion" style="display: none;">
            <h2 class="mb-4 display-3">Crear Sección</h2>

            <div id="contentCrearSeccion" class="row">
                <div class="col-12">
                </div>
            </div>

            <form class="row g-3" id="formCrearSeccion">

                <div class="col-10">
                    <label for="nombreCurso" class="form-label">Nombre del curso</label>
                    <input type="text" class="form-control" id="nombreCurso" name="nombreCurso" required>
                </div>
                <div class="col-2">
                <label for="codigoCurso" class="form-label">Codigo</label>
                    <input type="text" class="form-control" id="codigoCurso" name="codigoCurso" required>
                </div>

                <div class="col-4">
                    <label for="seccionCurso" class="form-label">Sección</label>
                    <input type="text" class="form-control" id="seccionCurso" name="seccionCurso" required>
                </div>
                <div class="col-4">
                <label for="campusCurso" class="form-label">Campus</label>
                    <select id="campusCurso" name="campusCurso" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>MO</option>
                        <option>SM</option>
                        <option>SI</option>
                        <option>VI</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="aulaCurso" class="form-label">Aula</label>
                    <input type="text" class="form-control" id="aulaCurso" name="aulaCurso" required>
                </div>

                <div class="col-6">
                    <label for="diaCurso" class="form-label">Día</label>
                    <select id="diaCurso" name="diaCurso" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>Lunes</option>
                        <option>Martes</option>
                        <option>Miercoles</option>
                        <option>Jueves</option>
                        <option>Viernes</option>
                        <option>Sabado</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="horaInicioCurso" class="form-label">Hora de inicio</label>
                    <input type="time" class="form-control" id="horaInicioCurso" name="horaInicioCurso" required>
                </div>
                <div class="col-3">
                    <label for="horaFinCurso" class="form-label">Hora de fin</label>
                    <input type="time" class="form-control" id="horaFinCurso" name="horaFinCurso" required>
                </div>

                <div class="col-4">
                    <label for="tipoCurso" class="form-label">Tipo de sesión</label>
                    <select id="tipoCurso" name="tipoCurso" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>TE</option>
                        <option>PR</option>
                        <option>LB</option>
                        <option>TA</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="cicloCurso" class="form-label">Ciclo</label>
                    <select id="cicloCurso" name="cicloCurso" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>2021-0</option>
                        <option>2021-1</option>
                        <option>2021-2</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="aforoCurso" class="form-label">Aforo COVID</label>
                    <input type="text" class="form-control" id="aforoCurso" name="aforoCurso" required>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Crear seccion 💾</button>
                </div>
            </form>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/admin.js"></script>
</body>

</html>