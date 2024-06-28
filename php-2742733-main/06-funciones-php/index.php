<?php

function validaredad ($edad) {
    if($edad >= 18) {
        echo "mayor de edad";
    } else {
        echo "menor de edad";
    }
}

validaredad(isset ($_POST ['edad']) ? $_POST['edad'] :  12);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>
<body>
    <h1>Funciones PHP</h1>

    <input type="text">
</body>
</html>