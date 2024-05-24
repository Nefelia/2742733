<?php
/* session_start(); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de inicio</h1>
        <form action="registro.php" method="post">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" placeholder="...">
            <br>
            <label for="contraseña">contraseña</label>
            <input type="text" name="contraseña" placeholder="...">
            <br>
            <button type="submit" value="submit">Registro</button>
        </form>
    <a href="./user.php">User Page</a>
    <a href="./cerrar.php">Cerrar Sesión</a>
</body>
</html>