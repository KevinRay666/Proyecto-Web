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
    $clasePW =  true;
    if($clasePW == true){
        echo "Hay clases"; 
    } else {
        echo "Es fiesta"; 
    }
?>

<?php 
    $test = 33;
    if($test < 40){
        echo "Si, $test es mayor que 40"; 
    } else if ($test < 35){
        echo "Si, $test es mayor que 35";
    } else if ($test < 30) {
        echo "Si, test es mayor que 30";
    } else {
        echo "No, $test es menor que 40,35 y 30";
    }
?>

<?php
    $mes = 10;
    switch ($mes){
        case 2:
            echo "EL mes introducido tiene 29 dias";
        case 1:
        case 4:
        case 6:
        case 9:
        case 11:
            echo "EL mes introducido tiene 30 dias"; break; 
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo "El mes introducido tiene 31 dias <br> "; break; 
        default:
        echo "El mes introducido no es valido <br>";
    }
?>

</body>
</html>