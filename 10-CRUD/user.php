<?php require('./componentes/header.php'); ?>

<head>
    <link rel="stylesheet" href="./style/user.css">
</head>

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

<?php require('./componentes/footer.php') ?>