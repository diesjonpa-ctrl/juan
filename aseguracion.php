<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-image: url(https://preview.redd.it/2s3jnu2j091a1.jpg?auto=webp&s=c6fe73c29f873e0c06dc40bbafca72cb387f0cf4);
            background-repeat: no-repeat;
            background-size: cover; 
            background-position: center;
        }
        form{
            color: #002b05;
            font-size: 25px;
        }
        #numero_de_incidentes{
            color: #01ac15;
            background-color: #002b05;
        }
        #volver_al_inicio{
            padding: 10px 20px;
            font-size: 20px;
            background-color: #bf0000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 40px;
        }
        #respuestas_culeras{
            color: #ffffff;
            font-size: 20px;
            background-color: #085f00;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 10px 0px;
        }

    </style>
</head>
<body>
    <form method="POST" >
        <h1>METE TUS DATOS</h1>
            <label for="nombre" ><h3>Pon tu nombre </h3></label><input type="text" id="nombre" name="nombre" >
            <label for="apellido" ><h3>pon tu apellido </h3></label><input type="text"id="apellido" name="apellido">
            <label for="edad" ><h3>tu edad tambien </h3></label><input type="number"id="edad" name="edad">
            <label for="fecha_de_la_patente" ><h3>fecha de la patente </h3></label><input type="date"id="fecha_de_la_patente" name="fecha_de_la_patente">
            <label for="numero_de_incidentes" id="numero_de_incidentes" ><h3>numero de incidentes </h3></label><input type="number"id="numero_de_incidentes" name="numero_de_incidentes">
            <input type="submit" value="envio">
    </form>
    <?php
        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["edad"]) 
            && isset($_POST["fecha_de_la_patente"]) && isset($_POST["numero_de_incidentes"])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $edad = $_POST["edad"];
            $fecha_de_la_patente = $_POST["fecha_de_la_patente"];
            $numero_de_incidentes = $_POST["numero_de_incidentes"];
            $costo_base = 500;
            $fecha_actual = date("d-m-Y"); 
            if ($edad < 25 && $fecha_actual - $fecha_de_la_patente < 2) {
                $costo = (30/100 *$costo_base) + ($numero_de_incidentes * (20/100 *  $costo_base)) + (15/100 *$costo_base);
            } elseif ($edad < 25) {
                $costo = (20/100 *$costo_base) + ($numero_de_incidentes * (20/100 *$costo_base));
            } elseif ($fecha_actual - $fecha_de_la_patente < 2) {
                $costo = $costo_base + ($numero_de_incidentes * (20/100 *$costo_base)) + (15/100 *$costo_base);
            } else {
                $costo = $costo_base + ($numero_de_incidentes * (20/100 *$costo_base));
            }
            echo "<br>";
            echo "<div id='respuestas_culeras'>A ver " . htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8')  . " " 
            . htmlspecialchars($apellido, ENT_QUOTES, 'UTF-8')  . ", el costo de la aseguración es: $" . $costo . "</div>";
        } else {
            echo "<br>";
            echo "<div id='respuestas_culeras'>Faltan datos por llenar para calcular el costo de la aseguración. </div>";
        }
    ?>      
    <button id="volver_al_inicio">Volver al inicio</button> 
    <script>
        document.getElementById("volver_al_inicio").addEventListener("click", function() {
            window.location.href = "http://localhost/juan/";
        });
    </script>
</body>
</html>