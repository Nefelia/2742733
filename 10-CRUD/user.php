<?php
require('conection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/user.css">
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
  <section class="course">
    <div class="container-fluid text-center">
      <div class="row ">
        <div class="col-12 botones">
          <a href="./user.php" class="btncrear">Crear Curso</a>
          <a href="./mycourse.php" class="btnmis">Mis Cursos</a>
        </div>
      </div>

      <?php if (isset($_SESSION['mensaje'])) {    ?>
        <div class="alert alert-<?php echo $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
          <p class="mensaje_alerta"> <?php echo $_SESSION['mensaje'] ?></p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php session_unset();
      } ?>

      <div class="row">
        <div class="col-2">
          <h3 class="ttl">Crear Curso</h3>
        </div>
      </div>
      <div class="row">
        <div class="col form_div text-start">
          <form action="addcourse.php" method="POST" enctype="multipart/form-data">
            <label class="label" for="titulo">Titulo</label>
            <br>
            <input type="text" name="titulo" id="titulo" required>
            <br>
            <label class="label" for="imagen">Imagen</label>
            <br>
            <label class="btn btn-file img" for="imagen" style="background-color: #19181D; color: #EEEF04; border-radius: 15px; font-family: CenturyGothic; font-size: large; text-align: start;">Imagen
              <input type="file" name="imagen" id="imagen" style="display: none;" required>
            </label>
            <br>
            <label class="label" for="descripcion">Descripcion</label>
            <br>
            <textarea name="descripcion" id="descripcion" rows="4" cols="40" required></textarea>
            <br>
            <label class="label" for="estudiantes">N° de Estudiantes</label> 
            <br>
            <input type="text" name="estudiantes" id="estudiantes" required>
            <br>
            <label class="label" for="clasificacion">Clasificación</label>
            <br>
            <select name="clasificacion" id="clasificacion">
              <option value="">Instrumentos de viento</option>
              <option value="">Instrumentos de cuerda frotada</option>
              <option value="">Instrumentos de cuerda tocada</option>
              <option value="">Instrumentos de percusión</option>
            </select>
            <br>
            <input class="submitbtn" type="submit" value="Crear">
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Footer -->
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