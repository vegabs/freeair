<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>Alumnos</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container py-4">
        <div class="container py-4" id="verAlumnos">
            <h2 class="mb-4 display-3">Alumnos</h2>
            <form class="row row-cols-lg-auto g-3 align-items-center" id="formAlumnos" method="post">
                <div class="col-12">
                    <label class="visually-hidden" for="codigoBuscar">Código</label>
                    <div class="input-group">
                        <div class="input-group-text">@</div>
                        <input type="text" class="form-control" name="codigoBuscar" id="codigoBuscar" placeholder="Código">
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="buscar">Buscar</button>
                </div>

                <div class="col-12 text-right">
                    <a id="btnCrearAlumno" class="btn btn-outline-primary">Crear</a>
                </div>
            </form>
            <div id="contentVerAlumnos"></div>
        </div>

        <div class="container py-4" id="verCrearAlumno" style="display: none;">
            <h2 class="mb-4 display-3">Crear alumno</h2>

            <div id="contentCrearAlumno" class="row">
                <div class="col-12">
                </div>
            </div>

            <form class="row g-3" id="formCrearAlumno">
                <div class="col-12">
                    <label for="codigoCrear" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigoCrear" name="codigoCrear" placeholder="u20..." required>
                </div>
                <div class="col-md-6">
                    <label for="nombreCrear" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreCrear" name="nombreCrear" required>
                </div>
                <div class="col-md-3">
                    <label for="apellidopCrear" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidopCrear" name="apellidopCrear" required>
                </div>
                <div class="col-md-3">
                    <label for="apellidomCrear" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidomCrear" name="apellidomCrear" required>
                </div>
                <div class="col-md-6">
                    <label for="campusCrear" class="form-label">Campus</label>
                    <select id="campusCrear" name="campusCrear" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>MO</option>
                        <option>SM</option>
                        <option>SI</option>
                        <option>VI</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="carreraCrear" class="form-label">Carrera</label>
                    <select id="carreraCrear" name="carreraCrear" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>Ing. Electrónica</option>
                        <option>Ing. Mecatrónica</option>
                        <option>Ing. Industrial</option>
                        <option>Ing. Ambiental</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="sexoCrear" class="form-label">Sexo</label>
                    <select id="sexoCrear" name="sexoCrear" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>M</option>
                        <option>F</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>

        <div class="container py-4" id="verEditarAlumno" style="display: none;">
            <h2 class="mb-4 display-3">Editar alumno</h2>

            <div id="contentEditarAlumno" class="row">
                <div class="col-12">
                </div>
            </div>

            <form class="row g-3" id="formEditarAlumno">
                <div class="col-12">
                    <label for="codigoCrear" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigoEditar" name="codigoEditar" placeholder="u20..." required>
                </div>
                <div class="col-md-6">
                    <label for="nombreEditar" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreEditar" name="nombreEditar" required>
                </div>
                <div class="col-md-3">
                    <label for="apellidopEditar" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellidopEditar" name="apellidopEditar" required>
                </div>
                <div class="col-md-3">
                    <label for="apellidomEditar" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellidomEditar" name="apellidomEditar" required>
                </div>
                <div class="col-md-6">
                    <label for="campusEditar" class="form-label">Campus</label>
                    <select id="campusEditar" name="campusEditar" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>MO</option>
                        <option>SM</option>
                        <option>SI</option>
                        <option>VI</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="carreraEditar" class="form-label">Carrera</label>
                    <select id="carreraEditar" name="carreraEditar" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>Ing. Electrónica</option>
                        <option>Ing. Mecatrónica</option>
                        <option>Ing. Industrial</option>
                        <option>Ing. Ambiental</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="sexoEditar" class="form-label">Sexo</label>
                    <select id="sexoEditar" name="sexoEditar" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>M</option>
                        <option>F</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/admin.js"></script>
</body>

</html>