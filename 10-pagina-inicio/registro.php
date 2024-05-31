<!-- <?php session_start();

        if ($_SERVER['REQUEST METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm = $_POST['confirm'];

            if( empty($username) or ($password)){
                echo "hola";
            } else {
                try {
                    $conexion = new PDO('mysql: host=localhost; dbname=focaapp', 'root', '');
                } catch (PDOException $e) {
                    echo "Error" . $e->getMessage();
                }
            }
        }

        ?> -->

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
            <div class="tarjeta text-center col-4 justify-content-end bg-primary-subtle">
                <div class="tarjeta-header ">
                    <ul class="nav nav-fill nav-tabs border-0">
                        <li class="nav-item">
                            <a href="" class="nav-link active" aria-current="true">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link disabled" aria-disabled="true">Iniciar Sesión</a>
                        </li>
                    </ul>
                </div>
                <h1>Registrarse</h1>
                <form action="registro.php" method="POST">
                    <input type="username" id="username" placeholder="nombre de usuario" name="username" class="form-control" require>
                    <br>
                    <input type="email" id="email" placeholder="correo" name="email" class="form-control" require>
                    <br>
                    <input type="password" id="password" placeholder="contraseña" name="password" class="form-control" require>
                    <br>
                    <input type="password" id="confirm" placeholder="confirmar contraseña" name="confirm" class="form-control" require>
                    <br>
                    <button type="submit" class="form-control">Registro</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>