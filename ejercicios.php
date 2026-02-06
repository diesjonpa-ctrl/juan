<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center;
    }
    #boton_pa_salir_al_menu{
        position: absolute;
        top: 10px;
        left: 10px;
        padding: 10px 20px;
        font-size: 16px;
        background-color: #a61b1b;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<body>
    <button id="boton_pa_salir_al_menu"> salir </button>
    <script>
        document.getElementById("boton_pa_salir_al_menu").addEventListener("click", function() {
            window.location.href = "http://localhost/juan/";
        });
    </script>
    <form method="POST">
    <h1>solicitud de trabajo </h1>
    <label for="nombre" ><h3>Pon tu nombre</h3></label><input type="text" id="nombre" name="nombre" >
    <label for="apellido" ><h3>Coloca tu apellido</h3></label><input type="text"id="apellido" name="apellido">
    <label for="edad" ><h3>tu edad tambien</h3></label><input type="number"id="edad" name="edad">
    <label for="Email" ><h3>tu Email aqui 👇 </h3></label><input type="email"id="Email" name="Email">
    <input type="submit" value="envio">
    </form>
    <?php 
        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"]) && isset($_POST["Email"])) {
        $nombre_del_usuario = strtoupper($_POST["nombre"]);
        $apellido_del_usuario = strtoupper($_POST["apellido"]);
        $edad = strtoupper($_POST["edad"]);
        $email = strtoupper($_POST["Email"]) ;
        echo "todo listo " . htmlspecialchars($nombre_del_usuario, ENT_QUOTES, 'UTF-8') 
        . ' ' . htmlspecialchars($apellido_del_usuario,ENT_QUOTES,'UTF-8' ) . ' ' 
        . 'es verdad que tienes' . ' ' . htmlspecialchars($edad,ENT_QUOTES,'UTF-8' ) . ' ' . 'años de edad';
    }
    else {
        echo "faltan datos por llenar ";
    }
     ?>
    <form method="get" action="nueva_pagina.php">
        <h1>mete tus nombres</h1>
            <label for="nombre1" ><h3>Pon tu nombre </h3></label><input type="text" id="nombre1" name="nombre1" >
            <label for="nombre2" ><h3>pon un segundo nombre </h3></label><input type="text"id="nombre2" name="nombre2">
            <label for="nombre3" ><h3>otro nombree </h3></label><input type="text"id="nombre3" name="nombre3">
            <label for="nombre4" ><h3>mas nombres </h3></label><input type="text"id="nombre4" name="nombre4">
            <input type="submit" value="envio">
    </form>
</body>
</html>
<?php

    $numeros = [70,2,60,4,5,6,30,8,9,10,50]; 
    foreach ($numeros as $numero) {
        if ($numero >= 50) {
            echo "<br>";
            echo "estos son los mayores del nivel 50 " . $numero;
            break;
        } else {
            echo "<br>";
            echo "estos son los menores de 50: " . $numero;
        }
    }
?>