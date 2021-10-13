<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>Ventilacion</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container py-4">
        <div class="container py-4" id="verVentilacion">
            <h2 class="mb-4 display-3">Ver ventilación</h2>
            <form class="row row-cols-lg-auto g-3 align-items-center" id="formVentilacion" method="post">
                <div class="col-12">
                    <label class="visually-hidden" for="campusBuscar">Campus</label>
                    <div class="input-group">
                        <div class="input-group-text">Campus</div>
                        <select id="campusBuscar" name="campusBuscar" class="form-select" required>
                            <option selected>Choose...</option>
                            <option>MO</option>
                            <option>SM</option>
                            <option>SI</option>
                            <option>VL</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <label class="visually-hidden" for="aulaBuscar">Aula</label>
                    <div class="input-group">
                        <div class="input-group-text">Aula</div>
                        <input type="text" class="form-control" id="aulaBuscar">
                    </div>
                </div>

                <div class="col-12">
                    <label class="visually-hidden" for="fechaBuscar">Fecha</label>
                    <div class="input-group">
                        <div class="input-group-text">Fecha</div>
                        <input type="date" class="form-control" id="fechaBuscar" placeholder="Username">
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Consultar</button>
                </div>
            </form>

            <table class="mt-4 table">
                <thead>
                    <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Hora de inicio</th>
                        <th scope="col">Hora de fin</th>
                        <th scope="col">Asistentes</th>
                        <th scope="col">Sección</th>
                        <th scope="col">Ventilación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>Mark</td>
                        <td>Otto</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/admin.js"></script>
</body>

</html>