<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/user.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Body -->
    <section class="course">
        <div class="container-fluid text-center">
            <div class="row botones">
                <div class="col-12">
                    <a href="./user.php" class="btncrear">Crear Curso</a>
                    <a href="./mycourse.php" class="btnmis">Mis Cursos</a>
                </div>
            </div>
            <?php if (isset($_SESSION['mensaje'])) {    ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col">
                    <h3>Crear Curso</h3>
                    <form action="addcourse.php" method="POST">
                        <label for="titulo">Titulo</label>
                        <br>
                        <input type="text" name="titulo">
                        <br>
                        <label for="imagen">Imagen</label>
                        <br>
                        <input type="file" name="imagen" id="">
                        <br>
                        <label for="estudiantes">N° de Estudiantes</label>
                        <br>
                        <input type="text" name="estudiantes">
                        <div class="dropdown">Clasificación</div>
                        <br>
                        <label for="descripcion">Descripcion</label>
                        <br>
                        <textarea name="descripcion" id=""></textarea>
                        <br>
                        <input type="submit" value="Crear">
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>