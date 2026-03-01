<?php
    $host     = "localhost";
    $usuario  = "root";       // usuario por defecto en XAMPP
    $password = "";           // contraseña vacía por defecto en XAMPP
    $base     = "las_bestias_legendarias"; // el nombre que pusiste en phpMyAdmin

    $conexion = new mysqli($host, $usuario, $password, $base);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }
        else {
            echo "Conexión exitosa a la base de datos.";
        }
?>