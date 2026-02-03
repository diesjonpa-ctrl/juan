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
</style>
<body>
    <form method="POST">
    <h1>solicitud de trabajo </h1>
    <label for="nombre" ><h3>Pon tu nombre</h3></label><input type="text" id="nombre" name="nombre" >
    <label for="apellido" ><h3>Coloca tu apellido</h3></label><input type="text"id="apellido" name="apellido">
    <label for="edad" ><h3>tu edad tambien</h3></label><input type="numer"id="edad" name="edad">
    <label for="fecha_de_nacimiento" ><h3>mes de nacimiento </h3></label><input type="date"id="fecha de nacimiento" name="fecha_de_nacimiento">
    <input type="submit" value="envio">
    </form>
</body>
</html>
<?php
    if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"]) && isset($_POST["fecha_de_nacimiento"])) {
        $nombre_del_usuario = strtoupper($_POST["nombre"]);
        $apellido_del_usuario = strtoupper($_POST["apellido"]);
        $edad = strtoupper($_POST["edad"]);
        $nacimiento = strtoupper($_POST["fecha_de_nacimiento"]);
        echo "todo listo " . htmlspecialchars($nombre_del_usuario, ENT_QUOTES, 'UTF-8')
         . htmlspecialchars($apellido_del_usuario,ENT_QUOTES,'UTF-8' ) ;
    }
?>