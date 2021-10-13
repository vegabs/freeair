<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>Aforo COVID</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container py-4">
        <div class="container py-4" id="verAforo">
            <h2 class="mb-4 display-3">Aforo COVID</h2>
            <form class="row row-cols-lg-auto g-3 align-items-center" id="formAforo" method="post">
                <div class="col-12">
                    <label class="visually-hidden" for="campusBuscar">Campus</label>
                    <div class="input-group">
                        <div class="input-group-text">🏦 Campus</div>
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
                    <button type="submit" class="btn btn-primary" id="buscar">Buscar</button>
                </div>
            </form>
            <div id="contentVerAforo"></div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/admin.js"></script>
</body>

</html>