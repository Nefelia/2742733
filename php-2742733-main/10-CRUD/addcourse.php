<?php require('conection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo 'datos enviados';

    $tituloCurso = $_POST['titulo'];

    $imagenCurso = $_FILES['imagen']['tmp_name'];
    $nombreImagen = $_FILES['imagen']['name'];
    $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sizeImg = $_FILES['imagen']['size'];
    $directorio = "img/";

    $descripcion = $_POST['descripcion'];
    $estudiantes = $_POST['estudiantes'];

    if ($tipoImagen == 'jpg' or $tipoImagen == 'jpeg' or $tipoImagen == 'png') {
        $statement = $conexion->prepare("INSERT INTO cursos (imagen, curso, descripcion, estudiantes) VALUES ('',?,?,?)");
         $statement->execute(array($tituloCurso, $descripcion, $estudiantes));
        $idRegistro = $conexion->lastInsertId();

        $ruta = $directiorio . $idRegistro . '.' . $tipoImagen;

        $statement  = $conexion->prepare("UPDATE cursos SET imagen = '$ruta' WHERE id = '$idRegistro' ");
        $statement->execute();

        if (move_uploaded_file($imagenCurso, $ruta)) {
            $_SESSION['mensaje'] = 'Curso agregado exitosamente';
            $_SESSION['color'] = '#EEEF04';

            header('Location: user.php');
        } else {
            $_SESSION['mensaje'] = 'Archivo no compatible';
            $_SESSION['color'] = '#E41476';

            header('locatiom: user.php');
        }
    }
}