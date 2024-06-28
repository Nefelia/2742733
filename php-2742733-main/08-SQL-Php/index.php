<?php
try {
    $conexion = new PDO('mysql: host=localhost; dbname=colegio', 'root','');
    echo "Conexion OK";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$nombre = "melisa";
$grado = "7";
$media_tecnica = "Gastronomia";

$statement = $conexion->prepare(" INSERT INTO `estudiantes`(`Nombre`, `Edad`, `Grado`, `Media Tecnica`) VALUES ( :nombre,'14', :grado, :media) ");

$statement->execute(array(":nombre"=>$nombre,":grado"=>$grado,":media"=>$media_tecnica));

$statement = $statement->fetchAll();

/* print_r($statement); */

foreach($statement as $item) {
    echo $item["Nombre"] . "<br>";
}

?>
