<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function sumaNumeros($param1, $param2){
            return $param1 + $param2;
        }
        echo sumaNumeros(10,20); 
        echo "<br>";
    ?>

    <?php 
        //$vector1 = array();
        $vector2 = array('php', 'python', 'ruby','js');
        echo $vector2[1];
        echo "<br>";
    ?>

    <?php 
        $persona = array('nombre' => 'Hipatia', 'apellido' => 'Pi', 'direccion' => 'Calle ciencia', 'Nacionalidad' => 'Egipcia');
        echo $persona['apellido'];
        echo "<br>";
    ?>

    <?php 
        $libros = array();
        $libros[0] = array('titulo' => 'El mundo y sus demonios', 'autor' => 'Carl Sagan');
        $libros[1] = array('titulo' => 'Comer sin miedo', 'autor' => 'J. M. Mulet');
        echo $libros[1]['autor'];
        echo "<br>";
    ?>

    <?php
        $colores =  array('rojo', 'amarrillo', 'azul',);
        foreach($colores as $color){
            echo 'Color actual ', $color;
            echo "<br>";
        }
    ?>
</body>
</html>