<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- EJERCICICIO 1 -->
    <form action="" method="GET">
        Edad: <input type="text" name="edad">
        <input type="submit" value="Submit">
    </form>
   
    <?php 
    $edad = $_GET["edad"];

    echo "<br>";
    if ($edad >= 18) {
      echo "Mayor de edad";
    } else {
     echo "Menor de edad";
    }
    echo "<br>";
    ?>
    
    <br>
    <!-- EJERCICIO 2 -->
    <form action="" method="post">
        Horas trabajadas: <input type="text" name="horas">
        Valor/hora: <input type="text" name="valor" id="">
        <input type="submit" value="Submit">
    </form>

    <?php
        $horas = $_POST["horas"];
        $valor = $_POST["valor"];

        $salario = $horas * $valor;

        echo "<br>";
        echo "Su salario es: $salario";
        echo "<br>";

        if ($salario > 2200000) {
            echo "Debe pagar retención en la fuente.";
        } else {
            echo "No debe pagar.";
        }
    ?>
    <br>
    <!-- EJERCICIO 3 -->
    <br>

    <form action="" method="post">
        <input type="text" placeholder="ingrese un numero" name="numero[]" placeholder="numero1">
        <input type="text" placeholder="ingrese un numero" name="numero[]" placeholder="numero3">
        <input type="text" placeholder="ingrese un numero" name="numero[]" placeholder="numero3">
        <input type="submit" value="Submit">
    </form>

    <?php 
    $numero = array ($_POST["numero"]);

    foreach ($numero as $orden) {
        sort($orden);
        echo $orden . ",";
    }
    ?>

</body>
</html>

