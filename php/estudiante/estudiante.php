<?php
session_start();
if (!isset($_SESSION['datos_usuario'])) {
    header('Location:../index.html');
    return;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <?php include 'header.php'; ?>
    <title>FreeAir Dashboard</title>
</head>

<body>
    <header class="border-bottom p-1">
        <?php include 'navbar.php'; ?>
    </header>
    
    <main class="container py-4" >
        <?php include "jumbo.php"; ?>
    </main>

    <?php include 'script.php'; ?>
</body>
</html>