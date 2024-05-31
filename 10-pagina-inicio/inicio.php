<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="title">
                    <h1>TOP TEXT <br> BOTTOM TEXT</h1>
                </div>
            </div>
            <div class="card text-center col-4 justify-content-end">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="" class="nav-link disabled" aria-disabled="true">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active" aria-current="true">Iniciar Sesión</a>
                        </li>
                    </ul>
                </div>
                <h1>Iniciar Sesión</h1>
                <form action="registro.php" method="$_POST">
                    <input type="username" id="username" placeholder="nombre de usuario" name="username" require>
                    <br>
                    <input type="email" id="email" placeholder="correo" name="email" require>
                    <br>
                    <input type="password" id="password" placeholder="contraseña" name="password" require>
                    <br>
                    <button type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>