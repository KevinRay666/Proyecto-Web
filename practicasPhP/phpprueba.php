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
        echo 'Mi color preferido es el '. 'rojo' . "<br>";
        $bebida = "leche";
        echo 'Mi bebida preferida es ' . $bebida . "<br>";
        $numero = 137;
        echo "Me gusta el numero " . $numero . "<br>";
    ?>
    <?php 
        echo "Suma" . "<br>";
        $a =  10;
        $b = 5;
        $c = 7;
        $d = 20;
        $r = $a + $b;
        echo "La suma de " . $a  . " y " . $b . " es igual a = " . "<b>". $r .  " </b> <br>";
        echo "Resta" . "<br>";
        
        $r = $a - $c;
        echo "La resta de " . $a  . " y " . $c . " es igual a = " . "<b>". $r .  " </b> <br>";
        echo "Multiplicacion" . "<br>";
       
        $r = $d * $c;
        echo "La Multiplicacion de " . $d  . " y " . $c . " es igual a = " . "<b>". $r .  " </b> <br>";
        echo "Division" . "<br>";
        
        $r = $b / $c;
        echo "La Division de " . $b  . " y " . $c . " es igual a = " . "<b>". $r .  " </b> <br>";
    ?>
</body>
</html>