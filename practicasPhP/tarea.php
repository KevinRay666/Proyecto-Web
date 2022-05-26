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
//0-10 niño
//11-20 adolecente
//31-60 adulto
//61 - adulto mayor
    $edad = 2;
    if($edad > 0 && $edad < 11){
        echo "Niño <br>";
    } else if($edad > 10 && $edad < 21){
        echo "Adolecente <br>";
    } else if($edad > 21 && $edad < 61){
        echo "Adulto <br>";
    } else if($edad > 60){
        echo "Adulto mayor <br>";
    }
?>
</body>
</html>