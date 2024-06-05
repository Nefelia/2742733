<?php session_start(); 

    if( $_SERVER["REQUEST_METHOD"] == 'POST' ){

        $usuario = $_POST['user'];
        $password = $_POST['password'];
    
        $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
        $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;
    
        if( empty($usuario) or empty($password) ){
            echo 'Rellene completo el formulario';
        } else {
            try {
                $conexion = new PDO('mysql: host=localhost; dbname=focaapp', 'root','');
    
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
    
            $statement = $conexion->prepare("SELECT * FROM `florista` WHERE username = :username AND contraseña = :password");
    
            $statement->execute(array(':username'=> $usuario, ':password'=> $password));
    
            $result = $statement ->fetch();
    
            if($result){
                echo 'true';
                $_SESSION['userRegister'] = $usuario;
                $_SESSION['passRegister'] = $password;
                header('location: user.php');
                
            } else {
                echo 'Usuario o Contraseña incorrectos';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="content container-fluid">
        <div class="row">
            <div class="col text-center fondo">
                <div class="title">
                    <h1>TOP TEXT <br> BOTTOM <br> TEXT</h1>
                </div>
            </div>
            <div class="tarjeta text-center col justify-content-end">
                <div class="tarjeta-header">
                    <ul class="nav nav-fill nav-tabs border-0">
                        <li class="nav-item">
                            <a href="" class="nav-link active" aria-current="true">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link disabled" aria-disabled="true">Iniciar Sesión</a>
                        </li>
                    </ul>
                </div>
                <h1>INICIAR SESIÓN</h1>
                <form action="registro.php" method="POST" class="formulario">
                    <i class="icono-user fa-solid fa-user fa-xl" style="color: #e0466b;"></i>
                    <input type="username" id="username" placeholder="nombre de usuario" name="username" class="form-control"  require>
                    <br>
                    <i class="icono-pass1 fa-solid fa-lock fa-xl" style="color: #e0466b;"></i>
                    <input type="password" id="password" placeholder="contraseña" name="password" class="form-control" require>
                    <br>
                    <button type="submit" class="boton">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>