<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <?php if ($_SESSION) : ?>

        <h1>Bienvenido <?php echo $_SESSION["nombre"];?> a tu País <?php ?> </h1>
        <a href="./cerrar.php">Cerrar Sesión</a>
        <a href="./index.php">Home</a>

    <?php else : ?>

        <h1>No has iniciado sesión</h1>
        <a href="./index.php">Iniciar Sesión</a>

    <?php endif ?>
</body>
</html>
