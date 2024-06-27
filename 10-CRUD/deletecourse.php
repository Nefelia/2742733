<?php require('conection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $statement = $conexion->prepare("DELETE FROM cursos WHERE id = $id");
    $statement = $execute();

    $_SESSION['mensaje'] = 'Curso Eliminado';
    $_SESSION['color'] = '#E41476';

    header('Location: user.php');
}
?>