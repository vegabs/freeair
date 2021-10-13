<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>Casos de fiebre</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container py-4">
        <div class="container py-4" id="verCasosFiebre">
            <h2 class="mb-4 display-3">Ver Casos de Fiebre</h2>
            <form class="row row-cols-lg-auto g-3 align-items-center">

                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Campus...</option>
                        <option value="1">MO</option>
                        <option value="2">SM</option>
                        <option value="3">SI</option>
                        <option value="3">VI</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

            <table class="mt-4 table">
                <thead>
                    <tr>
                        <th scope="col">Curso</th>
                        <th scope="col">Hora de entrada</th>
                        <th scope="col">Hora de salida</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Sección</th>
                        <th scope="col">Temperatura</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>