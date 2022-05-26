<?php
    include('conexion.php');

    if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
        $usuario = $_POST['usuario'];
        $pass = $_POST['contraseña'];

        $consultaSQL = "SELECT username, contraseña FROM usuarios 
            where username = '$usuario' and contraseña = '$pass' ";

        $result = $conexion -> query($consultaSQL);

        //echo "Los datos que recibi son Usuario: $usuario y la contraseña es: $pass";
        //echo "<br>";

        //echo $result -> num_rows;

        if($result -> num_rows > 0){
            echo "Bienvenido $usuario";
            header("Location:usuario.html");
        } else {
            echo "Datos incorrecots";
        }
        
        
    }
    
    /*
    $usuario = $_POST['usuario'];
    $pass = $_POST['contraseña'];
    
    echo "Los datos que recibi son Usuario: $usuario y la contraseña es: $pass";
    */
    
?>
