<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

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

    $statement = $conexion->prepare("INSERT INTO `usersapp`(`ID`, `username`, `correo`, `contraseña`) 
        VALUES (NULL, :username , :email, :pass)");

    $statement->execute(array(":username" => $usuario, ":email" => $email, ":pass" => $password));

    $statement = $statement->fetchAll();

    header('location: login.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/register.css">
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
        <form class="divform" action="register.php" method="post">
          <input type="text" name="username" class="input" placeholder="Nombre Completo" require>
          <input type="text" name="email" class="input" placeholder="Correo" require>

          <div>
            <label for="days">Fecha de Nacimiento</label>
            <br>
            <select id="days" name="days">
              <option>dd</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>09</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </select>
            <select id="month">
              <option>mm</option>
              <option>01</option>
              <option>02</option>
              <option>03</option>
              <option>04</option>
              <option>05</option>
              <option>06</option>
              <option>07</option>
              <option>08</option>
              <option>08</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
            <select id="year">
              <option>aa</option>
              <option>2011</option>
              <option>2010</option>
              <option>2009</option>
              <option>2008</option>
              <option>2007</option>
              <option>2006</option>
              <option>2005</option>
              <option>2004</option>
              <option>2003</option>
              <option>2002</option>
              <option>2001</option>
              <option>2000</option>
              <option>1999</option>
              <option>1998</option>
              <option>1997</option>
              <option>1996</option>
              <option>1995</option>
              <option>1994</option>
              <option>1993</option>
              <option>1992</option>
              <option>1991</option>
              <option>1990</option>
              <option>1989</option>
              <option>1988</option>
              <option>1987</option>
              <option>1986</option>
              <option>1985</option>
              <option>1984</option>
              <option>1983</option>
              <option>1982</option>
              <option>1981</option>
              <option>1980</option>
              <option>1979</option>
              <option>1978</option>
              <option>1977</option>
              <option>1976</option>
              <option>1975</option>
              <option>1974</option>
              <option>1973</option>
              <option>1972</option>
              <option>1971</option>
              <option>1970</option>
              <option>1969</option>
              <option>1968</option>
              <option>1967</option>
              <option>1966</option>
              <option>1965</option>
              <option>1964</option>
            </select>
          </div>

          <div>
            <select class="code">
              <option class="dropdown-item" selected>+</option>
              <option class="dropdown-item" value="">ARG +54</option>
              <option class="dropdown-item" value="">BOL +591</option>
              <option class="dropdown-item" value="">COL +57</option>
              <option class="dropdown-item" value="">CUB +53</option>
            </select>

            <input type="text" class="input tlf" placeholder="Telefono-Celular">
          </div>

          <input type="password" name="password" class="input" placeholder="contraseña" require>
          <button type="submit" class="registrobtn">REGISTRARSE</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>