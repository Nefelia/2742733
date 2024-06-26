<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
  $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

  if (empty($email) or empty($password)) {
    echo '<div class="mensaje">
                <h5>Usuario o Contraseña incorrectos</h5>
            </div>';
  } else {
    try {
      $conexion = new PDO('mysql: host=localhost; dbname=focaapp', 'root', '');
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare("SELECT * FROM `usersapp` WHERE correo = :correo AND contraseña = :password");

    $statement->execute(array(':correo' => $email, ':password' => $password));

    $result = $statement->fetch();

    if ($result) {
      echo 'true';
      $_SESSION['userRegister'] = $email;
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container-fluid content">
    <div class="row">
      <div class="col divlogo">
        <div class="logo"></div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-5">
        <form class="divform" action="login.php" method="post">
          <input type="text" name="email" class="input" placeholder="Correo" require>
          <input type="password" name="password" class="input" placeholder="contraseña" require>
          <p class="forgot">Olvide mi contraseña</p>
          <button type="submit" class="iniciobtn">INICIAR SESIÓN</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>