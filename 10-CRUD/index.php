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

<body>
    <!-- Header -->
    <header>
        <div class="container-fluid text-center">
            <div class="row header">
                <div class="col-1">
                    <div class="logo-header">
                    </div>
                </div>
                <div class="col">
                    <div class="form">
                        <input type="search" class="form-input search" placeholder="BUSCAR...">
                    </div>
                </div>
                <div class="col-6 usuario">
                    <a href="" class="inicio">INICIAR SESIÓN</a>
                    <a href="" class="registro">REGISTRARSE</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Body -->
    <section class="container-fluid content">
        <div class="row">
            <div class="col-2">
                <div class="dropdown ">
                    <button class="dropdown-toggle filters" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filtrar
                        por</button>
                    <ul class="dropdown-menu">
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
                    <ul class="dropdown-menu menu">
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
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col">
                            <img src="" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Curso ..</h5>
                                <img src="" alt="" class="perfil">
                                <p>Juan Cárdenas</p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium suscipit magni,
                                    maxime reiciendis ipsa officiis maiores asperiores illo cumque eaque.
                                </p>
                                <div>
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
            <div class="col">
                <div class="card">
                    <div class="row g-0">
                        <div class="col">
                            <img src="" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Curso ..</h5>
                                <img src="" alt="" class="perfil">
                                <p>Juan Cárdenas</p>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium suscipit magni,
                                    maxime reiciendis ipsa officiis maiores asperiores illo cumque eaque.
                                </p>
                                <div>
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
    <!-- Footer -->
    <footer>
        <div class="container-fluid text-center">
            <div class="row footer">
                <div class="col-4 copyright">
                    <p>Copyright</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia tempora modi optio provident,
                        eum vero qui quam impedit quos, consequuntur libero nam beatae. Repellendus eos minus maiores
                        illo deserunt eius.</p>
                </div>
                <div class="row row-cols-2 col-6 redes">
                    <div>
                        <div class="x">
                            <i class="fa-brands fa-x-twitter ix" style="color: #e41476;"></i>
                            <p>@musica123</p>
                        </div>
                        <div class="inst">
                            <i class="fa-brands fa-instagram iinst" style="color: #e41476;"></i>
                            <p>musica123</p>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="google">
                                <i class="fa-brands fa-google igoogle" style="color: #e41476;"></i>
                                <p>musica123@gmail.com</p>
                            </div>
                            <div class="wsp">
                                <i class="fa-brands fa-whatsapp iwsp" style="color: #e41476;"></i>
                                <p>(##)123-456 123</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="logo-footer"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>