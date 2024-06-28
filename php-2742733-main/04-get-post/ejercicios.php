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
    echo "<br>";
    if(isset($_GET["edad"])) {
        $edad = $_GET["edad"];
        if ($edad >= 18) {
        echo "Mayor de edad";
        } else {
        echo "Menor de edad";
        }        
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
    if(isset($_POST["horas"])) {
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
    }

    ?>
    <br>
    <!-- EJERCICIO 3 -->
    <br>
    <form action="" method="post">
        <input type="text" placeholder="ingrese un numero" name="numero1">
        <input type="text" placeholder="ingrese un numero" name="numero2">
        <input type="text" placeholder="ingrese un numero" name="numero3">
        <input type="submit" value="Submit">
    </form>
        
    <?php

        if(isset($_POST["numero1"])){

            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $numero3 = $_POST["numero3"];
    
            echo (max($numero1, $numero2, $numero3));
        }
    ?>
    <br>
    <!-- EJERCICIO 4 -->
    <br>
    <form action="" method="post">
        Metros a pintar: <input type="text" placeholder="Metros Cuadrados" name="metros">
        <br>
        <br>
        <label for="pregunta">Elija el tipo de superficie</label>
        <br>
        <label for="Estucado">Estucado</label>
        <input type="radio" name="Superficie" value="Estucado">
        <label for="Sin estucar">Sin estucar</label>
        <input type="radio" name="Superficie" value="Sin estucar">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST ["metros"])) {
        $metros = $_POST ["metros"];
        $superficie = $_POST["Superficie"];
        echo "<br>";
    
        if ($superficie == "Estucado") {
            echo "Valor a pagar: " . $metros * 2000 + 15000;
        } else {
            echo "Valor a pagar: " . $metros * 4000 + 15000;
        }
    }
    ?>

</body>
</html>

