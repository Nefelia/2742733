<?php
 //Ejercico 1
$saludo = "Hola";
$nombre1 = "Pedro";
$nombre2 = "Ana";

echo "$saludo $nombre1 y $nombre2, ¿Como están? <br>" ;

echo "<br> <ul> Página creada por" . "<li>$nombre1'</li>" . "<li>'$nombre2'</li> <br>";
 //Ejercicio 2
$mi_numero = "5";
$respuesta = "$mi_numero";

$respuesta += "2";
$respuesta *= "2";
$respuesta -= "2";
$respuesta /= "2";
$respuesta -= $mi_numero;

echo $respuesta;
?>

