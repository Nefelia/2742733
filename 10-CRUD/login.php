<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['username'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    if (empty($usuario) or empty($password)) {
        echo '<div class="mensaje">
                <h5>Usuario o Contraseña incorrectos</h5>
            </div>';
    } else {
        try {
            $conexion = new PDO('mysql: host=localhost; dbname=focaapp', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("SELECT * FROM `usersapp` WHERE username = :username AND contraseña = :password");

        $statement->execute(array(':username' => $usuario, ':password' => $password));

        $result = $statement->fetch();

        if ($result) {
            echo 'true';
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            header('location: user.php');
        } else {
            echo '<div class="mensaje">
                    <h5>Usuario o Contraseña incorrectos</h5>
                </div>';
        }
    }
}
?>