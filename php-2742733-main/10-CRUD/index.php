<?php
require('conection.php')
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
    <div class="container-fluid text-center">
      <div class="row header">
        <div class="col-1">
          <div class="logo-header">
          </div>
        </div>
        <div class="col">
          <div class="form">
            <input type="text" class="form-input search" placeholder="BUSCAR...">
          </div>
        </div>
        <div class="col-6 usuario">
          <a href="./login.php" class="inicio">INICIAR SESIÓN</a>
          <a href="./register.php" class="registro">REGISTRARSE</a>
        </div>
      </div>
    </div>
  </header>
  <!-- Body -->
  <section class="container-fluid content">
    <div class="row listas">
      <div class="col-2">
        <div class="dropdown">
          <button class="dropdown-toggle filters" type="button" data-bs-toggle="dropdown" aria-expanded="false">Filtrar
            por</button>
          <ul class="dropdown-menu" style="background-color: #19181D;">
            <li class="dropdown-item">
              <a href="">Principiante</a>
            </li>
            <li class="dropdown-item">
              <a href="">Intermedio</a>
            </li>
            <li class="dropdown-item">
              <a href="">Avanzado</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-2">
        <div class="dropdown">
          <button class="dropdown-toggle filters" type="button" data-bs-toggle="dropdown" aria-expanded="false">Ordenar
            por</button>
          <ul class="dropdown-menu" style="background-color: #19181D;">
            <li class="dropdown-item">
              <a href="">Nuevo-viejo</a>
            </li>
            <li class="dropdown-item">
              <a href="">Viejo-Nuevo</a>
            </li>
            <li class="dropdown-item">
              <a href="">Mayor-Menor # de estudiantes</a>
            </li>
            <li class="dropdown-item">
              <a href="">Mayor-Menor Clasificación</a>
            </li>
            <li class="dropdown-item">
              <a href="">A-Z</a>
            </li>
            <li class="dropdown-item">
              <a href="">Z-A</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row cursos row-cols-2 justify-content-around">

      <?php
      $statement = $conexion->prepare("SELECT * FROM cursos");
      $statement->execute();
      $result = $statement->fetchAll();

      foreach ($result as $item) { ?>

        <div class="col-3">
          <a class="no-link" href="producto.php?id=<?php echo $item['id'] ?>">
            <div class="card" style="background-color: #19181D; width: 34rem; padding-right: 20px; border-radius: 20px;">
              <div class="row g-0">
                <div class="col">
                  <img src="<?php echo $item['imagen'] ?>" class="img-fluid rounded-start">
                </div>
                <div class="col">
                  <div class="card-body tarjeta">
                    <h5 class="card-title" style="color: #35E2EF; font-family: CenturyGothicB;">
                      Curso <?php echo $item['titulo'] ?>
                    </h5>
                    <div class="perfil">
                      <img src="./style/img/Placeholder.png" class="img-perfil">
                      <p>Juan Cárdenas</p>
                    </div>
                    <p class="card-text">
                      <?php echo $item['descripcion'] ?>
                    </p>
                    <div class="mini-info">
                      <p class="card-text">
                        <small><?php echo $item['estudiantes'] ?> estudiantes</small>
                      </p>
                      <p class="card-text">
                        <small>3.7 Clasificación</small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }  ?>
        </div>
    </div>
  </section>
  <footer>
    <div class="container-fluid text-center">
      <div class="row footer">
        <div class="col-4 copyright">
          <p>Copyright</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia tempora modi optio provident,
            eum vero qui quam impedit quos, consequuntur libero nam beatae. Repellendus eos minus maiores
            illo deserunt eius.</p>
        </div>
        <div class="row row-cols-2 col-6 redes">
          <div>
            <div class="x">
              <i class="fa-brands fa-x-twitter ix" style="color: #e41476;"></i>
              <p>@musica123</p>
            </div>
            <div class="inst">
              <i class="fa-brands fa-instagram iinst" style="color: #e41476;"></i>
              <p>musica123</p>
            </div>
          </div>
          <div>
            <div>
              <div class="google">
                <i class="fa-brands fa-google igoogle" style="color: #e41476;"></i>
                <p>musica123@gmail.com</p>
              </div>
              <div class="wsp">
                <i class="fa-brands fa-whatsapp iwsp" style="color: #e41476;"></i>
                <p>(##)123-456 123</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="logo-footer"></div>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>