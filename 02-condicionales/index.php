<?php
 // Ejercicio 1.1
$articulos = 13;

if( $articulos >= 12) {
    echo "Caja Rápida";  
} else {
    echo "Caja Normal";
}

echo "<br>";

 //Ejercicio 1.2
$edad = 20;

if ($edad >=18) {
    echo "sí";
} else {
    echo "no";
}

echo "<br>";

//Ejercicio 2
$Nombre = "Mario";
$edad2 = "12";

if ($edad2 >= 18) {
    echo "Puede ingresar a la discoteca";
} else {
    echo "No puede ingresar a la discoteca";
}

echo "<br>";

if ($edad2 >= 18 and $Nombre =  "Carlos") {
    echo "Puede ingresar a la zona VIP";
} else if ($edad2 >= 18 and $Nombre =  "Mario") {
    echo "Puede ingresar a la zona VIP";
}

//Ejercicio 3

$Estatura = "170";
$Velocidad = "25";
$Edad3 = "25";
?>