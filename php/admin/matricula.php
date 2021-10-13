<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>Matricula</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>

    <main class="container py-4">
    <div class="container py-4" id="verMatricula">
    <h2 class="mb-4 display-3">Matricula</h2>
    <form class="row g-3">
        <div class="col-md-6">
        <label for="inputState" class="form-label">Campus</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>MO</option>
                <option>SM</option>
                <option>SI</option>
                <option>VI</option>
            </select>
        </div>
        <div class="col-md-6">
        <label for="inputState" class="form-label">Carrera</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>Ingeniería Electrónica</option>
                <option>Ingeniería Mecatrónica</option>
            </select>
        </div>
        <div class="col-md-2">
        <label for="inputState" class="form-label">Ciclo</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="col-md-4">
        <label for="inputState" class="form-label">Sección</label>
            <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Matricular</button>
            <button type="submit" class="btn btn-primary">Retirar</button>
        </div>
    </form>
</div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>