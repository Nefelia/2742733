<?php session_start();

try{
    $conexion = new PDO('mysql: hosto=localhost; dbname=focaap', 'root', '');
    echo "conexión ok";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

