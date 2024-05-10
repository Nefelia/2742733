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
 echo "<br>";

$edad = 20;

if ($edad >=18) {
    echo "sí";
} else {
    echo "no";
}

echo "<br>";
//Ejercicio 2
echo "<br>";

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

echo "<br>";
//Ejercicio 3
echo "<br>";

$estatura = "170";
$velocidad = "27";
$edad3 = "13";

if ($estatura >= 170 and $velocidad >=27) {
    echo "Puede ingresar al equipo";
} else {
    echo "No puede ingresar al equipo";
}

echo "<br>";

if ($edad3 >= 18) {
    echo "Divisiones mayores";
} else {
    echo "Divisiones Menores";
}

echo "<br>";
//Ejercicio 4
echo "<br>";

$color = "marrón";
$calidad = "La calidad de aire es:";

switch($color) {
    case "verde":
        echo "$calidad Buena";
        break;
    case "amarillo":
        echo "$calidad Moderada";
        break;
    case "naranja":
        echo "$calidad No es saludable para grupos sensibles";
        break;
    case "rojo":
        echo "$calidad No es saludable";
        break;
    case "púrpura":
        echo "$calidad Muy poco saludable";
        break;
    case "marrón":
        echo "$calidad Peligrosa";
        break;
    default: 
        echo "Color no válido";
}

?>