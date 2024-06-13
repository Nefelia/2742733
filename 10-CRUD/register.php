<?php session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirm = $_POST['confirm'];

    if (empty($usuario) or empty($password) or $password !== $confirm) {
        echo '<div class="mensaje">
                <h5>Usuario o Contraseña incorrectos</h5>
            </div>';
    } else {
        try {
            $conexion = new PDO('mysql: host=localhost; dbname=focaapp', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("INSERT INTO `usersapp`(`ID`, `username`, `correo`, `contraseña`) 
        VALUES (NULL, :username , :email, :pass)");

        $statement->execute(array(":username" => $usuario, ":email" => $email, ":pass" => $password));

        $statement = $statement->fetchAll();

        header('location: login.php');
    }
}

?>