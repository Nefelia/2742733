<?php
require('conection.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/mycourse.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #2F2C38;">
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
  <!-- body -->
  <section class="course">
    <div class="container-fluid text-center">
      <div class="row ">
        <div class="col-12 botones">
          <a href="./user.php" class="btncrear">Crear Curso</a>
          <a href="./mycourse.php" class="btnmis">Mis Cursos</a>
        </div>
      </div>
      <table class="table tabla" style="border: 1px solid #19181D;">
        <thead>
          <tr class="tr">
            <th scope="col" class="title">ID</th>
            <th scope="col" class="title">Imagen</th>
            <th scope="col" class="title">Curso</th>
            <th scope="col" class="title">Descripicion</th>
            <th scope="col" class="title">Estudiantes</th>
            <th scope="col" class="title">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $statement = $conexion->prepare("SELECT * FROM cursos");
          $statement->execute();
          $result = $statement->fetchAll();

          foreach ($result as $item) {
          ?>
            <tr>
              <th scope="row" class="id"><?php echo $item['id'] ?></th>
              <td class="img"> <img src="<?php echo $item['imagen'] ?>" width="100"></td>
              <td class="cursoname"> <?php echo $item['titulo'] ?></td>
              <td class="desc"> <?php echo $item['descripcion'] ?></td>
              <td class="estd"> <?php echo $item['estudiantes'] ?></td>
              <td class="d-flex gap-4 acciones">
                <a href="editcourse.php?id=<?php echo $item['id'] ?>"><i class="fa-solid fa-pen-to-square" style="color: #e41476;"></i></a>
                <a href="deletecourse.php?id=<?php echo $item['id'] ?>"><i class="fa-solid fa-trash" style="color: #e41476;"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="text-center btn">
        <button link="index.php" type="button" class="btntabla"> <a href="./index.php">Inicio</a></button>
      </div>
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

</html>