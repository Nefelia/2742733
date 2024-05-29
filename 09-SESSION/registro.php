<?php session_start();



if($_SERVER['REQUEST_METHOD']== 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if( empty($usuario) or empty($password)){
        echo 'Rellene completo el formulario';
    } else{
        try {
            $conexion = new PDO('mysql: host=localhost; dbname=focaapp', 'root','');
        
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("INSERT INTO `usersapp`(`ID`, `username`, `correo`, `contraseña`) 
        VALUES (NULL, :username , :email, :pass)");

        $statement-> execute(array(":username"=>$usuario, ":email"=>$email, ":pass"=>$password));

        $statement = $statement ->fetchAll();

        header("location: index.php");
    }

    echo 'Te has registrado';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Registrate</h1>

    <form action="registro.php" method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email" name="email" required> 
        <label for="user">User</label>
        <input type="text" placeholder="User" name="user">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit">Registrarse</button>
    </form>

    <?php if( isset($_SESSION['userRegister']) ) : ?>
        <p>Datos registrados, ya puedes iniciar sesión</p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] . '<br>' . $_SESSION['emailRegister']; ?></p>
        <a href="index.php">Iniciar sesión</a>
    <?php endif ?>

</body>

</html>