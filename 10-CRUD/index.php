<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<?php require('./componentes/header.php'); ?>

<body>
    <!-- Body -->
    <section class="container-fluid content">
        <div class="row listas">
            <div class="col-2">
                <div class="dropdown">
                    <button class="dropdown-toggle filters" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filtrar
                        por</button>
                    <ul class="dropdown-menu" style="background-color: #19181D;">
                        <li class="dropdown-item">
                            <a href="">Principiante</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Intermedio</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Avanzado</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-2">
                <div class="dropdown">
                    <button class="dropdown-toggle filters" type="button" data-bs-toggle="dropdown" aria-expanded="false">Ordenar
                        por</button>
                    <ul class="dropdown-menu" style="background-color: #19181D;">
                        <li class="dropdown-item">
                            <a href="">Nuevo-viejo</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Viejo-Nuevo</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Mayor-Menor # de estudiantes</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Mayor-Menor Clasificación</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">A-Z</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="">Z-A</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row cursos justify-content-around">
            <div class="col-5">
                <div class="card" style="background-color: #19181D; width: 34rem; padding-right: 20px; border-radius: 20px;">
                    <div class="row g-0">
                        <div class="col">
                            <img src="" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col">
                            <div class="card-body tarjeta">
                                <h5 class="card-title" style="color: #35E2EF; font-family: CenturyGothicB;">Curso ..
                                </h5>
                                <div class="perfil">
                                    <img src="./style/img/circulo.png" alt="" class="img-perfil">
                                    <p>Juan Cárdenas</p>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium suscipit magni,
                                    maxime reiciendis ipsa officiis.
                                </p>
                                <div class="mini-info">
                                    <p class="card-text">
                                        <small>20 estudiantes</small>
                                    </p>
                                    <p class="card-text">
                                        <small>3.7 Clasificación</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card" style="background-color: #19181D; width: 34rem; padding-right: 20px; border-radius: 20px;">
                    <div class="row g-0">
                        <div class="col">
                            <img src="" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col">
                            <div class="card-body tarjeta">
                                <h5 class="card-title" style="color: #35E2EF; font-family: CenturyGothicB;">Curso ..
                                </h5>
                                <div class="perfil">
                                    <img src="./style/img/circulo.png" alt="" class="img-perfil">
                                    <p>Juan Cárdenas</p>
                                </div>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium suscipit magni,
                                    maxime reiciendis ipsa officiis.
                                </p>
                                <div class="mini-info">
                                    <p class="card-text">
                                        <small>23 estudiantes</small>
                                    </p>
                                    <p class="card-text">
                                        <small>3.6 Clasificación</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('./componentes/footer.php') ?>
    
</body>

</html>