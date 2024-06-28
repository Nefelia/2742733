<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php if (isset($_SESSION['userRegister'])) : ?>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-12 banner">
                    <div class="left">
                        <img src="./img/Recurso 6.png" alt="">
                        <h1><?php echo $_SESSION['userRegister']; ?></h1>
                    </div>
                    <div class="right">
                        <p>1 Siguiendo</p>
                        <p>5 Seguidores</p>
                    </div>
                </div>
            </div>
            <div class="texto">
                <p>Bienvenido, <?php echo $_SESSION['userRegister']; ?>
                    Revisa las ultimas noticias.</p>
            </div>
            <div class="row content">
                <div class="cuerpo col-12">
                    <img src="./img/Recurso 6.png" alt="">
                    <form action="" class="publicacion">
                        <textarea rows="5" cols="60" name="status" id="">
                            </textarea>
                        <br>
                        <input type="submit" class="publish" value="Publicar">
                    </form>
                </div>
                <div class="row">
                    <div class="col cerrar">
                        <a href="./cerrar.php" class="boton">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>

        <h1 class="no">No has iniciado sesión</h1>
        <div id="boton">
            <a href="./index.php" class="inicio">Iniciar Sesión</a>
        </div>
    <?php endif ?>
</body>

</html>