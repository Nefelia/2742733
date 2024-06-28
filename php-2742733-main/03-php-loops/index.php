<?php
//WHILE - resta del 10 al 1

$i = 10;

while ($i > 0) {
    echo "The number is: $i <br>";
    $i--;
}

//FOR - Tabla del 7

$y = 1;
for ($x = 7; $x <= 70; $x+= 7) {
    echo "7x$y = $x <br>";
        if ($y <10) {
        $y++;
        }
}

//FOREACH - Organizar colores por su valor

$colors = array("red" =>"20", "green" =>"14", "blue" =>"38", "yellow" =>"40", "purple" =>"2", "pink" =>"9");
asort($colors);

foreach ($colors as $x => $y) {
    echo "$x : $y <br>";
}

?>