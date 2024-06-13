<?php

require('conection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo 'datos enviados';

    $titulo = $_POST['titulo'];
    $imagen = $_POST['imagen'];
    $descripcion = $_POST['descripcion'];
    $estudiantes = $_POST['estudiantes'];

    $statement = $conexion->prepare("INSERT INTO cursos(`imagen`, `curso`, `descripción`, `estudiantes`) 
    VALUES (?,?,?,?)");

    $statement-> execute(array($imagen,$titulo,$descripcion,$estudiantes));

    $_SESSION['mensaje'] = 'Curso Agregado Exitosamente';
    $_SESSION['color'] = '#E41476';

    header('location: user.php');
}

?>