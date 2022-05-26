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
        $persona = array('nombre' => 'Hipatia', 'apellido' => 'Pi', 'direccion' => 'Calle ciencia', 'Nacionalidad' => 'Egipcia');
        foreach($persona as $clave => $elemento){
            echo 'Clave = ', $clave;
            echo '<br/>';
            echo 'Elemento = ',  $elemento;
            echo '<br/>';
        }
    ?>
    <?php 
        $array[0] = 'Uno';
        $array[1] = 'Dos';
        $array[2] = 'Tres';
        $array[3] = 'Cuatro';
        $array[4] = 'Cinco';
        $array[5] = 'Seis';
        $array[6] = 'Siete';
        $array[7] = 'Ocho';
        for($i = 0; $i<count($array); $i++){
            echo $array[$i], '<br/>';
        }
    ?>

    <?php
        $cade = "Cadena1";
        $n = strlen($cade);
        echo "La longitud de la cadena es: $n", "<br/>";  
    ?>
    <?php
        $cade = "cadena";
        $sub1 = substr($cade,2);
        $sub2 = substr($cade,2,2);
        echo "La subcadena numero Uno es la siguiente: $sub1", "<br/>";
        echo "La subcadena numero Dos es la siguiente: $sub2", "<br/>";
    ?>
    <?php 
        $texto = "Donde dije Diego dije Diego";
        echo str_replace("Diego", "recortes", $texto);
        echo "<br/>";
        echo $texto;
        echo "<br/>";
    ?>
    <?php
        $cadena = "EstO eS UnA cadeNA de CARActeres";
        echo strtolower($cadena);
        echo "<br/>";
        echo strtoupper($cadena);
        echo "<br/>";
    ?>
</body>
</html>