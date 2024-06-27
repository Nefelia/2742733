<?php require('conection.php'); ?>

<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $statement = $conexion->prepare("SELECT * FROM `cursos` WHERE `id` = '$id'");
    $statement->execute();

    $result = $statement->fetch();


}else{
    header("Location: index.php");
}


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

<body>
  <!-- Body -->
  <div class="container-fluid curso-info">
    <div class="row">
      <div class="col-4">
        <div>
          <div class="imagen">
            <img src="<?php echo $result['imagen'] ?>" alt="">
          </div>
          <div class="visual">
            <img src="./style/img/circulo.png" class="circulo" alt="">
            <div>
              <h3>Juan Cárdenas</h3>
              <p>CEO / Musico / Desarrollador</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4 informacion">
        <h3 class="titulo">Curso <?php echo $result['titulo'] ?></h3>
        <p class="desc"><?php echo $result['descripcion'] ?></p>
        <div class="boton">
          <button class="inscr">INSCRIBIRSE</button>
        </div>
      </div>
      <div class="col-3">
        <div class="puntos">
          <img src="" alt="">
          <div class="lecciones">
            <p>1 - Nombre Lección</p>
            <p>2 - Nombre Lección</p>
            <p>3 - Nombre Lección</p>
            <p>4 - Nombre Lección</p>
            <p>5 - Nombre Lección</p>
            <p>6 - Nombre Lección</p>
            <p>7 - Nombre Lección</p>
          </div>
        </div>
      </div>
    </div>
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