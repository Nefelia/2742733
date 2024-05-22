<?php

// 1. SELECT
// SELECT `Nombre`, `Grado` FROM `estudiantes`;
// Saca los datos de las columnas especificadas de la tabla "estudiantes"

// 2. SELECT DISTINCT 
// SELECT DISTINCT `Grado` FROM `estudiantes`;
// Saca cada dato distinto de la columna especificada

// 3. WHERE
// SELECT * FROM `estudiantes` WHERE `Media Tecnica` = 'Sistemas';
// Elige los datos que coincidan con la condición puesta

// 4. ORDER BY
// SELECT * FROM `estudiantes` ORDER BY `Edad` DESC;
// Ordena los elementos especificados de manera ascendiente (predeterminada) o descendiente (si es un string se ordena alfabeticamente)

// 5. AND
// SELECT * FROM `estudiantes` WHERE `Grado` = '11' AND `Media Tecnica`= 'Gastronomia';
// Elige los datos que coincidan con multiples condiciones puestas, todas deben ser verdaderas

// 6. OR
// SELECT * FROM `estudiantes` WHERE `Grado`= '11' OR `Grado`= '7';
// Elige los datos que coincidan con una u otra condición de varias

// 7. NOT
// SELECT * FROM `estudiantes` WHERE NOT `Media Tecnica`= 'Sistemas';
// Elige los datos que no contengan la condición

// 8. INSERT INTO
// INSERT INTO `estudiantes`(`Nombre`, `Edad`, `Grado`, `Media Tecnica`) VALUES ('Laura','14','10','Logistica');
// Inserta nuevos valores en las columnas especificadas 

//9. NULL
// SELECT * FROM `estudiantes` WHERE `Documento` IS NULL;
// NULL es una columna sin valor, se puede filtrar por columnas sin valor con IS NULL

//10. UPDATE 
// UPDATE `estudiantes` SET `Documento` = NULL WHERE `estudiantes`.`ID` = 8;
// Cambia datos especificos en la tabla, (cambia el dato del documento a nulo del estudiante con id 8)

//11. DELETE
// DELETE FROM `estudiantes` WHERE `estudiantes`.`ID`=8;
// Borra las filas especificadas de una tabla, Laura y sus datos se borro de la tabla

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>