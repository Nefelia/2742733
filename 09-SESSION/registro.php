<?php

if($_POST["usuario"]){
    session_start();

    $_SESSION["nombre"] = $_POST["usuario"];
    $_SESSION["contraseña"] = $_POST["contraseña"];

    echo "Puede iniciar sesión";
} else {
    echo "Complete el formulario";
    header("Location: index.php");
}


?>