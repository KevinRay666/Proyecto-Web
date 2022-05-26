<?php
    include('conexion.php');

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && 
    isset($_POST['usuario']) && isset($_POST['edad']) && 
    isset($_POST['sexo']) && isset($_POST['correo']) && 
    isset($_POST['contraseña']) && isset($_POST['peso']) && 
    isset($_POST['altura']) && isset($_POST['masa'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $masa = $_POST['masa'];
    }
?>