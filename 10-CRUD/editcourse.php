<?php require('conection.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $statement = $conexion->prepare("SELECT * FROM `cursos` WHERE id = $id");
  $statement->execute();
  $result = $statement->fetch();

  $titulo = $result['titulo'];
  $descripcion = $result['descripcion'];
  $estudiantes = $result['estudiantes'];

  echo "Titulo de la tarea " . $titulo . '<br>';
  echo "Descripcion de la tarea " . $descripcion . '<br>';
}

if (isset($_POST['actualizar_curso'])) {
  $id = $_GET['id'];
  $tituloActualizado = $_POST['titulo'];
  $descripcionActualizado = $_POST['descripcion'];
  $estudiantesActualizado = $_POST['estudiantes'];

  $imagenCurso = $_FILES['imagenCurso']['tmp_name'];
  $nombreImagen = $_FILES['imagenCurso']['name'];
  $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
  $sizeImg = $_FILES['imagenCurso']['size'];
  $directorio = "./style/img/";


  if ($tipoImagen == 'jpg' or $tipoImagen == 'jpeg' or $tipoImagen == 'png') {

    $ruta = $directorio . $id . '.' . $tipoImagen;

    $statement = $conexion->prepare("UPDATE `cursos` SET imagen=?, `curso`= ?,`descripcion`= ?,`estudiantes`= ? WHERE id = ?");
    $statement->execute(array($ruta, $tituloActualizado, $descripcionActualizado, $estudiantesActualizado, $id));

    if (move_uploaded_file($imagenCurso, $ruta)) {
      $_SESSION['mensaje'] = 'Curso Actualizado';
      $_SESSION['color'] = '#EEEF04';

      header('Location: mycourse.php');
    }
  } else {
    $_SESSION['mensaje'] = 'formato no admitido';
    $_SESSION['color'] = '#E41476';

    header('Location: mycourso.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/editcourse.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #2F2C38;">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col">
        <h3 class="ttl">Editar Curso</h3>
      </div>
    </div>
    <div class="row">
      <div class="col form_div text-start">
        <form action="editcourse.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
          <label class="label" for="titulo" value="<?php echo  $titulo ?>" required>Titulo</label>
          <br>
          <input type="text" name="titulo" id="titulo1" required>
          <br>
          <label class="label" for="imagen">Imagen</label>
          <br>
          <label class="btn btn-file img" for="imagen" style="background-color: #19181D; color: #EEEF04; border-radius: 15px; font-family: CenturyGothic; font-size: large; text-align: start;">Imagen
            <input type="file" name="imagen" id="imagen" style="display: none;" required>
          </label>
          <br>
          <label class="label" for="descripcion" value="<?php echo  $descripcion ?>" required>Descripcion</label>
          <br>
          <textarea name="descripcion" id="descripcion" rows="4" cols="40" required></textarea>
          <br>
          <label class="label" for="estudiantes">N° de Estudiantes</label>
          <br>
          <input type="text" name="estudiantes" id="estudiantes" value="<?php echo  $estudiantes ?>" required>
          <br>
          <label class="label" for="clasificacion">Clasificación</label>
          <br>
          <select name="clasificacion" id="clasificacion">
            <option value="">Instrumentos de viento</option>
            <option value="">Instrumentos de cuerda frotada</option>
            <option value="">Instrumentos de cuerda tocada</option>
            <option value="">Instrumentos de percusión</option>
          </select>
          <br>
          <input class="submitbtn" type="submit" id="titulo" name="actualizar_curso" value="Actualizar">
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>