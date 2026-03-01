<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <form method="POST" name="phpmyadmin">
        <h1>BESTIAS ESENCIALES</h1>
        <h2>CREA LA TUYA</h2>
        <label for="Especie" ><h3>Pon su especie </h3></label><input type="text" id="Especie" name="Especie">
        <label for="Nombre_de_la_bestia" ><h3>Su nombre </h3></label><input type="text" id="Nombre_de_la_bestia" name="Nombre_de_la_bestia" >
        <label for="Edad" ><h3>Su edad </h3></label><input type="number"id="Edad" name="Edad" >
        <label for="Peso" ><h3>Cuanto pesa tu criatura</h3></label><input type="number"id="Peso" name="Peso">
        <label for="Elemento" ><h3>Que elemento domina </h3></label><input type="text"id="Elemento" name="Elemento">
        <label for="Nombre_cientifico" ><h3> NOMBRE CIENTIFICO </h3></label><input type="text" id="Nombre_cientifico" name="Nombre_cientifico">
        <label for="Detalles_medicos"><h3> Sus detalles médicos </h3></label><input type="text" id="Detalles_medicos" name="Detalles_medicos">
        <label for="P_A"><h3>Poder de ataque</h3></label><input type="number" id="P_A" name="P_A">
        <label for="P_D"><h3>Poder de destrucción</h3></label><input type="text" id="P_D" name="P_D">
        <input type="submit" value="CREAR TU BESTIA" name="CREAR_BESTIA">
        <input type="reset" value="BORRAR_TODO">
    </form>
<?php
    require "conexion.php";
    if (isset($_POST['CREAR_BESTIA'])){
        $Especie = $_POST['Especie'];
        $Nombre_de_la_bestia = $_POST['Nombre_de_la_bestia'];
        $Edad = $_POST['Edad'];
        $Peso = $_POST['Peso'];
        $Elemento = $_POST['Elemento'];
        $Nombre_cientifico = $_POST['Nombre_cientifico'];
        $Detalles_medicos = $_POST['Detalles_medicos'];
        $Poder_de_ataque = $_POST['P_A'];
        $Poder_de_destruccion = $_POST['P_D'];

        $insertar_datos = "INSERT INTO animales VALUES ('','$Especie', '$Nombre_de_la_bestia', '$Edad', '$Peso',
        '$Elemento', '$Nombre_cientifico', '$Detalles_medicos', '$Poder_de_ataque', '$Poder_de_destruccion')";
        $ejecutar_insertar = mysqli_query($conexion, $insertar_datos);
        if ($ejecutar_insertar === TRUE) {
            echo "Bestia creada exitosamente.";
        } else {
            echo "Error: " . $insertar_datos . "<br>" . mysqli_error($conexion);
        }
        
    }
?>
</body>
</html>